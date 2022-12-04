<div> 
<div>   
 <label>Category:</label>  
   <select wire:model="selectedCategory">        @foreach($categories as $category)            <option>{{ $category }}</option>        @endforeach    
   </select>    
   
   {{$selectedCategory}}
   
   </div> 
   
   <div>    
   <label>Author:</label>   
    <select wire:model="selectedAuthor">        @foreach($authors as $author)            <option>{{ $author }}</option>        @endforeach    
    </select>    
    {{$selectedAuthor}}
    </div>
/div>