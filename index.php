<?php
include("Heads.php")
?>
<?php
include("Connection.php")
?>
<?php
$objconection = new conection;
$result = $objconection->consult("SELECT * FROM `imagenes`");
?>

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Bienvenid@s</h1>
    <p class="col-md-8 fs-4">Este es una API en PHPcon imagenes de campuslands</p>
    <!-- <button class="btn btn-primary btn-lg" type="button">Más información</button> -->
  </div>
</div>

<?php foreach ($result as $project) { ?>

<?php } ?>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($result as $project) { ?>

  <div class="col">
    <div class="card h-100">
      <img src="Archivos/<?php echo $project['Link']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $project['Name']; ?></h5>
        <p class="card-text"><?php echo $project['Description']; ?></p>
      </div>
    </div>
  </div>

<?php } ?>

  

</div>
<?php
include("foot.php")
?>