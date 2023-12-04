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
  public $search;

  public function mount($search)
  {
    $this->search = $search;
  }

  #[On('createNewUser')]
  public function updateList($user = null)
  {
    
  }

  public function update()
  {
    // $this->resetPage();
  }

  public function placeholder()
  {
    $paginate = $this->paginate;
    return view('placeholder', compact('paginate'));
  }
  
  public function render()
  {
    $users = User::latest()->where('name', 'like', "%{$this->search}%")->paginate($this->paginate);
    return view('livewire.user-list', compact('users'));
  }
}
