<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
  use WithPagination;

  #[On('createNewUser')]
  public function updateList($user = null)
  {
    
  }

  public function render()
  {
    $users = User::paginate(4);
    return view('livewire.user-list', compact('users'));
  }
}
