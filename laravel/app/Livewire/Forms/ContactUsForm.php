<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContactUsForm extends Form
{
  #[Rule('required|min:3|max:255')]
  public $name;

  #[Rule('required|email|min:3|max:255')]
  public $email;

  #[Rule('required|min:3|max:255')]
  public $subject;

  #[Rule('required|min:3|max:255')]
  public $message;
}
