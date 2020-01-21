<?php include('partials/header.php'); ?>
<?php include('php/personal_data.php');  ?>



<!-- Images silder-->
<!-- Images slider-->
<div class="container">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="./../img/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./../img/img2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./../img/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>

<!-- container para marca personal -->
<!-- container para marca personal -->
<div class="container mt-4">
  <div class="col-md-4 offset-md-4">
      <h3 class="border-bottom-gray text-center"><?php echo $obj_maku->get_makubex_code(); ?></h3>
      <p class="text-center"><?php echo $obj_maku->get_entorno_web(); ?></p>

  </div>
  
</div>






<!-- Enlace contact -->
<!-- Enlace contact -->

  <div class="col-12 text-center">
      <a href="./contact.php" class="btn btn-info mt-4">Contáctame</a>
  </div>


 












  





<?php include('partials/footer.php'); ?>

 