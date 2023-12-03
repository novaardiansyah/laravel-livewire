<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component
{
  #[Rule('required|min:2|max:50')]
  public $name;

  #[Rule('required|email|unique:users,email')]
  public $email;

  #[Rule('required|min:6|max:25')]
  public $password;

  public function render()
  {
    $title = 'Clicker';
    $users = User::all();
    return view('livewire.clicker', compact('title', 'users'));
  }

  public function createNewUser()
  {
    $this->validate();

    User::create([
      'name'     => $this->name,
      'email'    => 'a_' . rand(0, 1000) . $this->email,
      'password' => $this->password
    ]);

    $this->reset(['name', 'email', 'password']);

    request()->session()->flash('success', 'User created successfully.');
  }

  public function deleteAllUser()
  {
    User::truncate();
  }
}
