<div x-data="passwordGenerator()">
  <label for="password">Password:</label>
  <input x-model="password" type="text" id="password" readonly>

  <label for="length">Length:</label>
  <input x-model.number="length" type="number" id="length">

  <button @click="generatePassword">Generate Password</button>
  <button @click="checkPasswordStrength">Check Password Strength</button>
</div>


<script>
  window.passwordGenerator=passwordGenerator() {
    return {
      password: '',
      length: 8,

      generatePassword() {
        // Generate a random password of the specified length
        this.password = Math.random().toString(36).slice(-this.length);
      },

checkPasswordStrength() {
        // Check if the password is weak
        if (this.password.length < 8 || !this.password.match(/[A-Z]/) || !this.password.match(/[a-z]/) || !this.password.match(/\d/)) {
          // Suggest a stronger password
          this.password = 'Please use a stronger password, such as "P@55w0rd!"';
        }
      }
    };
  }
</script>

