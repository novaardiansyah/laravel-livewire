<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
  use WithPagination;

  #[Rule('required|min:2|max:50')]
  public $name;

  #[Rule('required|email|unique:users,email')]
  public $email;

  #[Rule('required|min:6|max:25')]
  public $password;

  public function render()
  {
    $title = 'Clicker';
    $users = User::paginate(3);
    return view('livewire.clicker', compact('title', 'users'));
  }

  public function createNewUser()
  {
    $validated = $this->validate();

    User::create([
      'name'     => $validated['name'],
      'email'    => 'a_' . rand(0, 1000) . $validated['email'],
      'password' => $validated['password']
    ]);

    $this->reset(['name', 'email', 'password']);

    request()->session()->flash('success', 'User created successfully.');
  }

  public function deleteAllUser()
  {
    User::truncate();
  }
}
