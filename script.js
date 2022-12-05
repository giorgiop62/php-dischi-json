const { createApp } = Vue;
createApp({
  data(){
    return{
      apiUrl: 'server.php',
      dischi:[]
    }
  },
  methods:{
    getDischi(){
      axios.get(this.apiUrl)
      .then(ris =>{
        console.log(ris.data);
        this.dischi = ris.data;
      })
    }
  },
}).mount('#app')