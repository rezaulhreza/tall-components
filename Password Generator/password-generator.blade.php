<div class="flex flex-col space-y-4 p-4">
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <div class="grid grid-cols-5 gap-2">
            <div class="relative mt-2 col-span-4">
                <input type="{{ $visible ? 'text' : 'password' }}" name="password" id="password" wire:model="password" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center {{$visible ? 'visible' : 'hidden'}}" wire:click="$toggle('visible')">
                    <!-- solid/eye-off -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                        <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                    </svg>
                </button>
                <button type="button" class ="absolute inset-y-0 right-0 pr-3 flex items-center {{$visible ? 'hidden' : 'visible'}}" wire:click="$toggle('visible')">
                    <!-- solid/eye -->
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="mt-2">
                <button type="button" wire:click="generatePassword" class="h-full inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Generate
                </button>
            </div>
        </div>
    </div>
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Confirm password</label>
        <div class="grid grid-cols-5">
            <div class="mt-2 col-span-4">
                <input type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
            </div>
        </div>
    </div>
</div>
