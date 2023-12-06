<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use App\Models\ContactMessage;
use Livewire\Component;

class ContactUs extends Component
{
  public ContactUsForm $form;

  public function render()
  {
    return view('livewire.contact-us');
  }

  public function submit()
  {
    $validated = $this->form->validate();
    session()->flash('success', 'Your message has been sent!');

    ContactMessage::create($validated);
    $this->form->reset();
  }
}
