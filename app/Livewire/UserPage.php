<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('User Page')]
class UserPage extends Component
{
  public User $user;
}
