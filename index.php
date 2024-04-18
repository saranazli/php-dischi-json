<?php 

  include __DIR__ . '/partials/head.php';

?>

<body>

  <div id="app">

    <div class="container center">

      <h1 class="titolo">{{title}}</h1>

      <div>
        <input type="text" class="form-control" placeholder="titolo">
        <input type="text" class="form-control" placeholder="autore">
        <input type="text" class="form-control" placeholder="anno">
        <input type="text" class="form-control" placeholder="genere">
      </div>

      <button class="btn btn-primary my-4"> AGGIUNGI ALBUM </button>
      
    </div>

    <div class="container d-flex flex-wrap justify-content-between">

        <div 
        v-for="(music, index_m) in disk"
        :key= "index_m"
        class="card m-4 my_card" style="width: 18rem;">
  
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