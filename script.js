const {createApp} = Vue;

createApp({

  data(){
    return{
      title: 'yo',
      apiUrl: 'server.php'
    }
  }

}).mount('#app');