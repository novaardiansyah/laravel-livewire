<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
  public $name, $email, $password;

  public function render()
  {
    $title = 'Clicker';
    $users = User::all();
    return view('livewire.clicker', compact('title', 'users'));
  }

  public function createNewUser()
  {
    User::create([
      'name'     => $this->name,
      'email'    => $this->email,
      'password' => $this->password
    ]);
  }

  public function deleteAllUser()
  {
    User::truncate();
  }
}
