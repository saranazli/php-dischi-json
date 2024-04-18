const {createApp} = Vue;

createApp({

  data(){
    return{
      title: 'TOP 6 ALBUM',
      apiUrl: 'server.php',
      disk: [],
      newDisk: {
        title: '',
        author: '',
        year: '',
        genre: ''
      }
    }
  },
  
  methods: {

    getApi(apiUrl){
      axios.get(apiUrl).then(res => {
        this.disk= res.data
        console.log(this.disk)
      })
    },
    getNewDisk(){
      const data = new FormData();
      data.append('newDiskForm', this.disk);
      data.append('newTitle', this.newDisk.title);
      data.append('newAuthor', this.newDisk.author);
      data.append('newYear', this.newDisk.year);
      data.append('newGenre', this.newDisk.genre);

      axios.post(this.apiUrl, data)
        .then( res => {
          this.newDisk= res.data
        })
    }
  },

  mounted() {
    this.getApi(this.apiUrl)
  }

}).mount('#app');