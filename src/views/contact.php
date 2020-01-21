<?php include('partials/header.php'); ?>
<?php include('php/personal_data.php');  ?>

<!-- Formulario de contacto -->
<!-- Formulario de contacto -->


<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-md-4">

        <form action="" class="contact__form">

            <h2 class="text-center border-bottom-gray">Formulario de contacto</h2>

            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
            </div>

            <div class="form-gruop">
                <input type="text" name="correo" placeholder="su correo" class="form-control my-3">
            </div>
            
            <div class="form-group">
                <input type="text" name="asunto" placeholder="asunto" class="form-control">
            </div>
            
            <div class="form-group">
             <textarea name="mensaje" id="" cols="30" rows="5" class="form-control" placeholder="mensaje"></textarea>
            </div>
            <input type="submit" name="" class="btn btn-info form-control" value="enviar">
        </form>
            

        </div>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>