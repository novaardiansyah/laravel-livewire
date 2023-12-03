<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
  public function render()
  {
    $title = 'Clicker';
    $users = User::all();
    return view('livewire.clicker', compact('title', 'users'));
  }

  public function createNewUser()
  {
    User::create([
      'name'     => 'New User',
      'email'    => rand(1, 100) . '@gmail.com',
      'password' => 12345
    ]);
  }

  public function deleteAllUser()
  {
    User::truncate();
  }
}
