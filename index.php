<?php 

  include __DIR__ . '/partials/head.php';

?>


<body>

  <div class="container" id="app">
    
    <div 
    v-for="(music, index_m) in disk"
    :key= "index_m"
    class="card" style="width: 18rem;">
      <img :src="music.poster" class="card-img-top" alt="music">
      <div class="card-body">
        <h5 class="card-title">{{music.title}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  

  <script src="./script.js"></script>  

</body>
</html>