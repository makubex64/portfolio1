<?php include('partials/header.php'); ?>
<?php include('php/personal_data.php');  ?>

<div class="container mt-4">
  <div id="resume-header" class="row">
    <div class="col-md-5">
      <h2 class="border-bottom-gray" ><i class="fas fa-align-left"></i> Sobre mí</h2>
      <p class="text-justify"><?php echo $obj_textInformation->getwebDeveloper(); ?></p>
    </div>
	
    <div class="col-md-6 jorge">
    	<img src="../img/jorge.jpg" alt="">
    </div>

    <!-- Information basic -->
<!-- Information basic -->

<div class="container mt-4">
  <div id="resume-header" class="row">
    <div class="col-md-6">
      <h2 class="border-bottom-gray"><i class="fas fa-laptop-code"></i> Desarrollador web </h2>
      <p class="text-justify"><?php echo $ojb_txtwebDeveloper->getwebDeveloper(); ?></p>
    </div>

     <div class="col-md-6">
      <h2 class="border-bottom-gray" ><i class="fas fa-book-reader"></i> Resumen de carrera </h2>
      <p class="text-justify"><?php echo $obj_resumenCarrera->getresumenCarrera();  ?></p>
    </div>

    

    </div>
  </div>





    <div class="col-4">
        <h1></h1>
        <h2 class="border-bottom-gray"><i class="fas fa-id-badge"></i> Información </h2>
        <ul>
          <li><strong>Nombre:</strong> <?php echo $obj_dataPersonal->getName(); ?></li>
          <li><strong>Mail:</strong><?php echo $obj_dataPersonal->getMail(); ?></li>
          <li><strong>Phone:</strong> <?php echo $obj_dataPersonal->getPhone(); ?></li>
          <li><strong>País:</strong> <?php echo $obj_dataPersonal->getCountry(); ?></li>
        </ul>
      </div>

      <div class="col-12 text-center my-4">
      <a href="./contact.php" class="btn btn-info mt-4">Contáctame</a>
  </div>

       <div class="container">
    <div id="resume-header" class="row">
      <div class="col-12">
        <h2 class="border-bottom-gray text-center mt-5">Skills</h2>
      </div>
    </div>
</div>

      <div class="container">
  <div class="row">
     <div class="col-md-3">
    <h3 class=""><i class="fas fa-code"></i> Code</h3>
    <ul>
      <li><?php echo $obj_code->getphp(); ?></li>
      <li><?php echo $obj_code->getjavascript(); ?></li>
      <li><?php echo $obj_code->getjquery(); ?></li>
      <li><?php echo $obj_code->getajax(); ?></li>
      <li><?php echo $obj_code->getmysql(); ?></li>
      <li><?php echo $obj_code->gethtml5(); ?></li>
      <li><?php echo $obj_code->getcss3(); ?></li>
      <li><?php echo $obj_code->getbootstrap(); ?></li>
    </ul>

    <h3 class=""><i class="fas fa-globe-americas"></i> Idiomas</h3>
          <ul>
            <li><?php echo $obj_code->getespañol(); ?></li>
            <li><?php echo $obj_code->getingles(); ?></li>
          </ul>
  </div>
</div>
</div>

   

    </div>
  </div>



<?php include('partials/footer.php'); ?>