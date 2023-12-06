<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
  use WithPagination;
  use WithFileUploads;

  #[Rule('required|min:2|max:50')]
  public $name;

  #[Rule('required|email|unique:users,email')]
  public $email;

  #[Rule('required|min:6|max:25')]
  public $password;

  #[Rule('nullable|sometimes|image|max:1024')]
  public $image;

  public function render()
  {
    $title = 'Clicker';
    return view('livewire.clicker', compact('title'));
  }

  public function createNewUser()
  {
    $validated = $this->validate();

    if ($this->image) {
      $validated['image'] = $this->image->store('uploads/profile', 'public');
    }

    $user = User::create([
      'name'     => $validated['name'],
      'email'    => 'a_' . rand(0, 1000) . $validated['email'],
      'password' => $validated['password'],
      'image'    => $validated['image'] ?? null
    ]);

    $this->reset(['name', 'email', 'password', 'image']);

    request()->session()->flash('success', 'User created successfully.');

    $this->dispatch('createNewUser', $user);
  }

  public function deleteAllUser()
  {
    User::truncate();
  }
}
