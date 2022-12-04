<!DOCTYPE html>
<html>
<head>
    <title>Parcel Sandbox</title>
    <meta charset="UTF-8" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v3.10.5/dist/alpine.min.js"
      defer></script>
    
  </head>
<body>

<div x-data="{
  password: '',
  length: 8,
  generatePassword() {
    let password = '';
        for (let i = 0; i < this.length; i++) {
      password += charset.charAt(Math.floor(Math.random() * charset.length));
    }

    this.password = password;
  }
}">
      <form class="flex flex-col">
        <div class="mt-5">
        <label for="password">Password:</label>
        <input type="text" x-model="password"/>
        </div>
        <label for="length">Password length:</label>
         <input id="length" type="number" min="8" x-model="length">
        <button type="submit" x-on:click.prevent="generatePassword()">Generate password</button>
        
      </form>

</div>

</body>

</html>

