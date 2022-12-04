<div>
<h1>Toggle Switch</h1>    
<div x-data="{ isOn: {{ $isOn ? 'true' : 'false' }} }" 
@click="isOn = ! isOn"        class="relative inline-block cursor-pointer bg-gray-400 rounded-full shadow-inner transition duration-200 ease-in-out"        
:class="{ 'bg-indigo-600 shadow-md': isOn, 'bg-white': ! isOn }">        
<div class="absolute inset-0 rounded-full shadow-lg"></div>        
<div class="relative inline-block align-middle px-4 py-2 text-sm font-semibold leading-5 text-gray-700 transition duration-150 ease-in-out"            
:class="{ 'text-indigo-100': isOn, 'text-indigo-600': ! isOn }"            x-text="isOn ? 'On' : 'Off'">
</div>    
</div>
</div> 
@push('scripts')<script>    window.addEventListener('livewire:load', function () {        
Livewire.on('toggle', () => {            
window.livewire.emit('toggle');        });    
});
</script>
@endpush