
<html>
    <head>   
        <link rel="stylesheet" href="home.css"/>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
<header class="container-fluid sticky-top opacity-75"  style="background-color:#ffffff;" >
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  " >

        <div class="container-fluid ">
          
         <div class="logo text-left ">
           <img src="logo.jpg">
         </div>
          

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  justify-content-end  " id="navbarNavAltMarkup">
            <div class="navbar-nav  ">
              <a class="nav-link active " aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Destinations</a>
              <a class="nav-link" href="#">About us</a>
              <a class="nav-link" href="loging.php">Login</a>
            </div>
          </div>
        </div>
    </nav>
</header>



<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
 $stmt = $db->query('SELECT * FROM pradeshes ORDER BY id');
 while ($row = $stmt->fetch()) {
?>

    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



 <div class="hero ">
      <img src="<?=  ?>" class="img-fluid rounded img-thumbnail" >
 </div>
 <?php } ?>
<!-- Places Section Start -->
<div class="section-places">
  <div class="container-fluid fs-3" style="background-color:#8acbed;">
    <b><i>PLACE TO VISIT</i></b>
  </div>
  <div class="container " >
    <div class="row">
      <div class="col-9">
        <div class="row">

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">   
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="http://ghumante.com/wp-content/uploads/2020/09/feature-1080x633.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="https://www.mountexperience.com/wp-content/uploads/2017/12/Makalu.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="https://c7.alamy.com/comp/D77H55/nepal-makalu-barun-national-park-west-face-makalu-fifth-highest-mountain-D77H55.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">
          </div>

          <div class="img-wrapper col-md-4 mb-2">
            <img class="img-thumbnail" src="solukhumbu.jpg">
          </div>
        
         </div>

      </div>
      <div class="col-3 ">
       <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
          <a class="btn btn-outline-success" type="submit" href="index.php?value=2">Search</a>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Places Section End -->

<footer class="container-fluid "  style="background-color:#ffffff ;">
  <div class="container-fluid text-center fs-3 ">VISIT NEPAL</div>
   <div class="container-fluid text-center fs-3">2022</div>
</footer>



    </body>

</html>