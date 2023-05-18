<?php
include("Connection.php")
?>
<?php
$objconection = new conection;
$result = $objconection->consult("SELECT * FROM `imagenes`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApiNux</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- comente esta parte porque tenia una version antigua de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" defer=""></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer=""></script>
    <link rel="stylesheet" href="prism.css">
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
      background-color: black; 
    }
    .visualizar{
        width: 100%;
    }
    .contenedorGrid{
        display: grid;
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        grid-template-columns: auto;
    }
    .imgLogo{
        width: 52px;
        height: 44px;    
    }
  /*   .imagen{
        width: 20%;
        height: 20%;
    } */
    .contenedor{
        margin-left: 50px;
        margin-right: 50px;
    }
  /*   .contenedor>img{
        height: 50%;
        width: 50%;
    } */
    .contenedor>img{
        height: 200px;
        width: 300px;
    } 
    @media (max-width: 1300px){
        .contenedor>img{
            height: 200px;
            width: 31%;
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    @media (max-width: 600px){
        .contenedor>img{
            height: 100px;
            width: 31%;
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    @media (max-width: 400px){
        .contenedor>img{
            height: 60px;
            width: 31%;
        }
        .contenedor{
        margin-left: 0.5%;
        margin-right: 0.5%;
    }
    }
    .contenidoModal{
        background-color: black;
    }
    .centrarNumero{
        text-align: center;
    }
    .centrarWpp{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
</head>
<body>
<!-- barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img class="imgLogo" src="https://cdn.pixabay.com/photo/2017/01/31/15/33/linux-2025130_1280.png" alt="">
            ApiNux
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">            
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Iniciar sesión</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal1">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal2"><button type="button" class="btn btn-success">Subir</button></a>
            </li>
          </ul>
            <a class="nav-link ml-auto pl-0" href="#" data-toggle="modal" data-target="#exampleModal2"><button type="button" class="btn btn-success">Solicitud API</button></a>
        </div>
    </nav>

<!-- modal para iniciar sesion para solicitud de API -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Inicia sesión</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group  text-white">
                  <label for="email">Correo electrónico</label>
                  <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
                </div>
                <div class="form-group  text-white">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                </div>
                <button type="submit" class="btn btn-success">Iniciar sesión</button>
                <div class="d-flex justify-content-lg-start align-item-center mt-2">
                    <a href="" class="m">¿Has olvidado tú contraseña?</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success">Crear cuenta</button>
        </div>
      </div>
    </div>
  </div>

<!-- modal para subir imagenes -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-100 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Subir imagen</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group  text-white">
                    <label for="title">Titulo para la imagen</label>
                    <!-- cambie id="" por name="nombre" lo cambie por title para correrlo aqui -->
                    <input required type="text" class="form-control" name="title" placeholder="Ingresa un titulo que defina la imagen">
                </div>
                <div class="form-group  text-white">
                    <label for="archivo">Subir imagen</label>
                    <!-- cambie name por image -->
                    <input required  class="form-control" type="file" name="image">
                </div>
                <div class="form-group  text-white">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" rows="5" placeholder="Escribe una descripción para la imagen"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Subir imagen</button>
            </form>
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-center align-item-center">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
  </div>

<!-- modal para contactanos -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
      <div class="modal-content contenidoModal">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Contáctanos</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-center align-item-center text-align-center">
            <div class="d-flex justify-content-center align-item-center">
                <div class="centrarWpp">
                    <a href="https://wa.me/573163748711">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="green" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </a>
                </div>
                <div  class="d-flex flex-colum justify-content-center align-item-center flex-column m-2">
                    <h3 class="text-white m-2 centrarNumero">Escríbenos al WhatsApp</h3>
                    <a class="text-success m-2 centrarNumero" href="https://wa.me/573163748711">+57 3163748711</a>
                </div>
            </div>
        </div>
        <div  class="d-flex justify-content-center align-item-center m-2">
            <h5 class="text-white">Correo: oscar.campus@gmail.com</h5>
        </div>
        <div class="modal-footer">
            <div class="d-flex justify-content-center align-item-center">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
  </div>

<!-- modal para iniciar sesion -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-0 mb-2 h-75 d-flex justify-content-center align-items-center" role="document">
          <div class="modal-content contenidoModal">
            <div class="modal-header">
              <h5 class="modal-title text-white" id="exampleModalLabel">Inicia sesión</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group  text-white">
                      <label for="email">Correo electrónico</label>
                      <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="form-group  text-white">
                      <label for="password">Contraseña</label>
                      <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-success">Iniciar sesión</button>
                    <div class="d-flex justify-content-lg-start align-item-center mt-2">
                        <a href="" class="m">¿Has olvidado tú contraseña?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success">Crear cuenta</button>
            </div>
          </div>
        </div>
      </div>
 
<!-- seccion buscador -->
    <div class="container mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar...">
            <button class="btn btn-dark" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
        </div>
        </div>
    </div>
    </div>


    <!-- muestra imagenes -->
    <div class="contenedor row d-flex justify-content-center align-item-center">
    <?php
    $directorio = 'uploads/'; // Reemplaza con la ruta a tu carpeta de imágenes
        $uuu='C:/xampp/htdocs/imagen/';
    $archivos = scandir($directorio);
    foreach ($archivos as $archivo) {
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) { // Filtrar solo imágenes
            $rutaArchivo = $directorio . '/' . $archivo;
            $rutaArchivo1 = $uuu.$directorio . '/' . $archivo;
            echo '<img class="m-1 p-0" src="' . $rutaArchivo . '" alt="' . $archivo . '">';
            /* echo '<p>' . $rutaArchivo . '</p>    <p>' . $archivo . '</p>'; */
            /* echo '<a href="' . $rutaArchivo1 . '" >' . $archivo . '</a>'; */
        }
    }
    ?>    
    </div>


<!-- muestra imagenes -->
    <!-- <div class="contenedor row d-flex justify-content-center align-item-center">
        <img class="m-1 p-0" src="https://cnnespanol.cnn.com/wp-content/uploads/2022/07/220713165438-rba-web-nasa-full-169.jpg?quality=100&strip=info&w=384&h=216&crop=1" alt="">
        <img class="m-1 p-0" src="https://cnnespanol.cnn.com/wp-content/uploads/2022/07/220713165438-rba-web-nasa-full-169.jpg?quality=100&strip=info&w=384&h=216&crop=1" alt="">
        <img class="m-1 p-0" src="https://www.nationalgeographic.com.es/medio/2021/07/12/una-manada-de-lobos_b4bdbe9f_800x800.jpg" alt="">
        <img class="m-1 p-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Front_view_of_a_resting_Canis_lupus_ssp.jpg/220px-Front_view_of_a_resting_Canis_lupus_ssp.jpg" alt="">
        <img class="m-1 p-0" src="https://www.nationalgeographic.com.es/medio/2022/11/08/lobo-negro-canis-lupus_3b691535_800x800.jpg" alt="">
        <img class="m-1 p-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Canis_lupus_265b.jpg/800px-Canis_lupus_265b.jpg" alt="">
        <img class="m-1 p-0" src="data:image/jpeg;base64,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" alt="">
        <img class="m-1 p-0" src="https://cnnespanol.cnn.com/wp-content/uploads/2022/07/220713165438-rba-web-nasa-full-169.jpg?quality=100&strip=info&w=384&h=216&crop=1" alt="">
        <img class="m-1 p-0" src="https://cnnespanol.cnn.com/wp-content/uploads/2022/07/220713165438-rba-web-nasa-full-169.jpg?quality=100&strip=info&w=384&h=216&crop=1" alt="">
        <img class="m-1 p-0" src="https://www.nationalgeographic.com.es/medio/2021/07/12/una-manada-de-lobos_b4bdbe9f_800x800.jpg" alt="">
        <img class="m-1 p-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Front_view_of_a_resting_Canis_lupus_ssp.jpg/220px-Front_view_of_a_resting_Canis_lupus_ssp.jpg" alt="">
        <img class="m-1 p-0" src="https://www.nationalgeographic.com.es/medio/2022/11/08/lobo-negro-canis-lupus_3b691535_800x800.jpg" alt="">
        <img class="m-1 p-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Canis_lupus_265b.jpg/800px-Canis_lupus_265b.jpg" alt="">
        <img class="m-1 p-0" src="data:image/jpeg;base64,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" alt="">
    </div> -->

    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>