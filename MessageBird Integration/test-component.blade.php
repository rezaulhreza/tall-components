<div>
<div class="flex flex-col">
    <label class="block font-bold mb-2 text-gray-700" for="name">
        Name
    </label>
    <input 
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="name"
        wire:model="name"
        type="text" 
        placeholder="Enter your name"
    >
    <label class="block font-bold mb-2 text-gray-700" for="qty">
        Quantity
    </label>
    <input 
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="qty"
        wire:model="qty"
        type="number" 
        placeholder="Enter the quantity"
    >
    <label class="block font-bold mb-2 text-gray-700" for="note">
        Note
    </label>
    <textarea
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="note"
        wire:model="note"
        placeholder="Enter a note"
    ></textarea>
    <label class="block font-bold mb-2 text-gray-700" for="phoneNumber">
        Phone number
    </label>
    <input
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="phoneNumber"
        wire:model="phoneNumber"
        type="tel"
        placeholder="Enter your phone number"
    >
    <button
        class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        wire:click="store"
    >
        Submit
    </button>
</div>
</div>