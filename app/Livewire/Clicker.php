<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
  public function render()
  {
    return view('livewire.clicker');
  }

  public function handleClick()
  {
    dump('clicked');
  }
}
