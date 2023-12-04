<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
  use WithPagination;
  public $paginate = 10;

  #[On('createNewUser')]
  public function updateList($user = null)
  {
    
  }

  public function placeholder()
  {
    $paginate = $this->paginate;
    return view('placeholder', compact('paginate'));
  }
  
  public function render()
  {
    sleep(3);
    $users = User::paginate($this->paginate);
    return view('livewire.user-list', compact('users'));
  }
}
