const {createApp} = Vue;

createApp({

  data(){
    return{
      title: 'yo',
      apiUrl: 'server.php',
      disk: []
    }
  },
  
  methods: {

    getApi(apiUrl){
      axios.get(apiUrl).then(res => {
        this.disk= res.data
        console.log(this.disk)
      })
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  }

}).mount('#app');