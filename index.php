<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
  <title>PHP Dischi JSON</title>
</head>
<body>
  <div id="app">
  <header>
    <img src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" alt="logo">
  </header>

  <div class="container ">
    <div class="row">
      <div class="col d-flex flex-wrap ">
        <div v-for="(disco,index) in dischi" class="card" style="width: 18rem; background-color:#12202f; color:white;">
          <img :src="disco.poster" class="card-img-top" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">{{disco.author}}</h5>
              <p class="card-text">{{disco.title}}</p>
              <p class="card-text">{{disco.year}}</p>
            </div>
        </div>
      

      </div>

    </div>

  </div>





  </div>
  <script src="./script.js"></script>
</body>
</html>