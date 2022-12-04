<div>
@if ($steps == 1)
<div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Name:</label>
    <input type="text" name="name" id="name" class="block w-full p-2 rounded-lg bg-gray-100 border border-gray-400 focus:border-indigo-500 focus:outline-none focus:bg-white" wire:model.debounce.300ms="name">
    @error('name')
     <span class="text-red-500 text-xs">{{ $message }}</span> 
     @enderror
</div>
@endif
@if ($steps == 2)
<div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email:</label>
    <input type="email" name="email" id="email" class="block w-full p-2 rounded-lg bg-gray-100 border border-gray-400 focus:border-indigo-500 focus:outline-none focus:bg-white" wire:model.debounce.300ms="email">
    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
</div>
@endif
@if ($steps == 3)
<div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Password:</label>
    <input type="password" name="password" id="password" class="block w-full p-2 rounded-lg bg-gray-100 border border-gray-400 focus:border-indigo-500 focus:outline-none focus:bg-white" wire:model.debounce.300ms="password">
    @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
</div>
@endif

@if ($steps > 1 && $steps <= 3)
<button wire:click="prevStep" class="px-4 py-2 font-bold text-white bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:shadow-outline-indigo active:bg-gray-900">
    Previous
</button>
@endif

@if ($steps == 3)
<button wire:click="saveData" class="px-4 py-2 font-bold text-white bg-indigo-500 rounded-lg hover:bg-indigo-400 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-600">
    Save
</button>
@else
<button  wire:click="nextStep()" class="px-4 py-2 font-bold text-white bg-indigo-500 rounded-lg hover:bg-indigo-400 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-600">
    Next
</button>
@endif
</div>
