<template>
  <button v-on:click="notify()">Click here to notify me</button>
</template>

<script>
export default {
  props: ["message", "title"],
  methods: {
    notify: function () {
      if (Notification.permission !== "granted") {
        Notification.requestPermission();
      } else {
        new Notification(this.title, {
          body: this.message,
        });
      }
    },
  },
};
</script>


//then use it in your app like:

<desktop-notificator
      message="This is the body"
      title="This is a title"
    ></desktop-notificator>
    
    //Make sure you import it!
