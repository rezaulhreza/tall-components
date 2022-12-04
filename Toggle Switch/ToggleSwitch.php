<?php 

//namespace here

use Livewire\Component; 

class ToggelSwitch extends Component
{

    public $isOn = false;
         
    public function toggle()    
    { 
    
     $this->isOn = ! $this->isOn;    
     }      
     
     public function render()    
     {        
     
     return view('toggle-switch');    
     }
     
} 
     