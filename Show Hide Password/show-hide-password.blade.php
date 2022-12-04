<div x-data="{ show: false,password:'pass1234' }">
  <input type="password" x-model="password" x-bind:type="show ? 'text' : 'password'" class="border p-2 rounded">
  <button @click="show = !show" class="p-2 rounded"
          x-text="show ? 'Hide' : 'Show'"></button>
</div>