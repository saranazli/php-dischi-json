const {createApp} = Vue;

createApp({

  data(){
    return{
      title: 'TOP 6 ALBUM',
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