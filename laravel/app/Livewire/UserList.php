<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
  use WithPagination;
  public $paginate = 10;

  #[Url(as: 's', history: true, keep: true)]
  public $search;

  public function mount($search = '')
  {
    $this->search = $search;
    if (request()->has('s')) $this->search = request()->get('s');
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

  #[Computed()]
  public function users()
  {
    return User::latest()->where('name', 'like', "%{$this->search}%")->paginate($this->paginate);
  }
  
  public function render()
  {
    return view('livewire.user-list');
  }
}
