<?php
include("Headboard.php")
?>
<?php
include("Connection.php")
?>
<?php
if ($_POST) {
    print_r($_POST);

    $nombre = $_POST['nombre'];
    $desc = $_POST['description'];
    $date = new DateTime();
    $user = 1;
    $img = $date->getTimestamp() . "_" . $_FILES['archivo']['name'];
    $temp_img = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($temp_img, "Archivos/" . $img);
    
    $objconection = new conection();

    $sql = "INSERT INTO sql10618119.imagenesPersonales (`id`, `name`, `description`, `image_link`,`usuario_id`) VALUES (NULL,' $nombre', '$desc', '$img','$user');";

    $objconection->execut($sql);
    header("location:briefcase.php");
}

$objconection = new conection;
$result = $objconection->consult("SELECT * FROM `imagenesPersonales`");

//print_r($result);

if ($_GET) {
    $id = $_GET['delete'];
    $objconection = new conection;
    try{
        $img1 = $result = $objconection->consult("SELECT * FROM `imagenesPersonales` WHERE id=" . $id);
    }catch(Exception $e){
        echo" Ha habido un error ";
    }
    unlink("Archivos/" . $img1[0]['image']);
    $sql = "DELETE FROM `imagenesPersonales` WHERE `imagenesPersonales`.`id` = $id";
    $objconection->execut($sql);
    header("location:briefcase.php");
}

?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="briefcase.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del proyeto : <input required  class="form-control" type="file" name="archivo" id="">
                        <br>
                        Descripción:
                        <br>
                        <textarea name="description" id="" cols="77" rows="5"></textarea>
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ((isset($result))) { ?>
                            <?php foreach ($result as $project) { ?>
                                <tr>
                                    <td style="cursor: pointer;"><?php echo $project['id']; ?></td>
                                    <td style="cursor: pointer;"><?php echo $project['name']; ?></td>
                                    <td style="cursor: pointer;"><?php echo $project['description']; ?></td>
                                    <td style="cursor: pointer;">
                                    
                                    <img width="100" src="<?php echo $project['image_link']; ?>" alt="">
                                
                                </td>
                                    <td style="cursor: pointer;"><?php echo $project['description']; ?></td>
                                    <td style="cursor: pointer;"><a href="?delete=<?php echo $project['id']; ?>" class="btn btn-danger" role="button">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        <?php } else {
                            return;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<br>




<?php
include("foot.php")
?>