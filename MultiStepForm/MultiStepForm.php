<?php

use Livewire\Component;

class MultiStepForm extends Component
{
    public int $steps = 1;

    public $name;

    public $email;

    public $password;

    public function mount()
    {
        $this->steps = 1;
    }

    public function nextStep()
    {
     $this->steps++;
    }

    public function prevStep()
    {
        $this->steps--;
    }

    public function saveData()
    {
      //you can do your operations here
        dd($this);
    }

  
    public function render()
    {
        return view('multi-step-form');
    }
}
