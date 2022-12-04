<?php 
use Livewire\Component; 
class LivewireComponent extends Component{    

public $categories = ['All', 'Books', 'Movies', 'Music'];    

public $selectedCategory = 'All';    

public $authors = ['All', 'J.K. Rowling', 'Stephen King', 'Jane Austen']; 
   
public $selectedAuthor = 'All';     

public function render()    
{        
return view('filter');    
}
}