<?php
session_start();
ob_start();
include('../include/config.php');
include('../include/defs.php');

$menssaje ='';

if (isset($_POST['master_reg'])) {

   $array_master = array("date_time"=> date('Y-m-d H:i:s'),
                         "fueled_up"=> $_POST['galons'],
                          "acum_final"=>$_POST['accumulated_finish'],
                          "price"=>$_POST['price_gallon'],
                          "sepplier_id"=>$_SESSION['id_user'],
                          "status" => 1);

    $id_master = InsertRec("fuel_master", $array_master);

    $menssaje ='<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Registro realizado con exito!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Registro Master</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php echo $menssaje; ?>
      <div class="row">
        <div class="col-12">
          <form class="" action="" method="post">
          <h3>Registro Master Fuel</h3>
            <div class="form-group">
              <label for="equipo">Galones</label>
              <input type="number" step="any" class="form-control" name="galons" value="">
            </div>
            <div class="form-group">
              <label for="equipo">Acumulado Final</label>
              <input type="number" step="any" class="form-control" name="accumulated_finish" value="">
            </div>
            <div class="form-group">
              <label for="equipo">Precio por Galon</label>
              <input type="number" step="any" class="form-control" name="price_gallon" value="">
            </div>
            <div class="form-group">
              <button type="submit" name="master_reg" class="btn btn-primary btn-lg btn-block boton_">Registrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
