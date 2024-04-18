<?php 

  include __DIR__ . '/partials/head.php';

?>

<body>

  <div id="app">

    <h1 class="text-center">TOP ALBUM</h1>

    <h2 class="my-4 text-center">AGGIUNGINE UNO TU!!</h2>

    <div class="container">
      
      <input 
      v-model.trim="newDisk.title" 
      type="text" 
      class="form-control"
      placeholder="titolo">
      <input 
      v-model.trim="newDisk.author" 
      type="text" 
      class="form-control" 
      placeholder="autore">
      <input 
      v-model.trim="newDisk.year" 
      type="text" 
      class="form-control" 
      placeholder="anno">
      <input 
      v-model.trim="newDisk.genre" 
      type="text" 
      class="form-control" 
      placeholder="genere">

      <button
      class="btn btn-primary text-center"
      @click.stop="getNewDisk"
      > 
      AGGIUNGI ALBUM 
      </button>

    </div>

    <div class="container d-flex flex-wrap justify-content-between">

        <div 
        v-for="(music, index_m) in disk"
        :key= "index_m"
        class="card m-4 my_card" 
        style="width: 18rem;">
  
        <img :src="music.poster" class="card-img-top img_my" alt="music">
  
        <div class="card-body">
          <h4 class="card-title">{{music.title}}</h4>
          <h5 class="card-text">{{music.author}}</h5>
          <p class="card-text">{{music.year}}</p>
          <p class="card-text">{{music.genre}}</p>
        </div>
  
      </div>
    </div>

    

  </div>
  

  <script src="./script.js"></script>  

</body>
</html>