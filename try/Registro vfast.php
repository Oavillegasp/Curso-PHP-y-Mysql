<?php

include "include/conexion.php";
include "include/insersion.php";




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE_edge">
    <meta name="viewport" content="widht=device-widht", initial-scale="1.0">
    <meta name="author" content="dlyp diseño de marketing digital 2022">
    <meta name="keyword" content="...">
    <meta name="description" content="165 caracteres">
    <title> V. FAST | Aplicativo online </title>
    <link rel="stylesheet" type="text/css" href="css/vfast.css">
        <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <script src="js/vfast registro.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
        <div class="container col-12 p-5 mt-5 ">

        <div class="row">

            <div class="container col-6 border shadow p-2" ><br><br>
                <img src="img/vfast_png.png" alt="" class="img-thumbnail img-fluid border-0 w-100 h-auto justify-content-center align-items-center">
            </div>

        <div class="container col-6 border shadow p-2">
            <form   name="login"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <h2 class="text-center display-5 mt-3"> | VFAST | <span class="text-warning"></span></h2>
        <h3 class="text-center display-5 mt-3"> | Registrarse | <span class="text-warning"></span></h3>

                     <!--Empieza Formulario-->
              
                            <h4>Nombre</h4>
                            <input type="text" name="Nombre" id="Name" class="form-control w-75 mx-auto" placeholder ="Nombre(s)"  required>
                            
                            
       
                
                            <h4>Apellido Paterno</h4>
                            <input type="text" name="ApPt" id="LastName" class ="form-control" placeholder ="Apellido Paterno"  required>
                            
                   
                        <h4>Apellido Materno</h4>
                            <input type="text" name="ApMt"  id="LastName2" class ="form-control" placeholder ="Apellido Materno" required>
                        


                 
                            <h4>Correo Electrónico</h4>
                            <input type="gmail" name="Email" id="Correo" class ="form-control" placeholder ="Gmail"  required>
                        

                   
                            <h4>Nickname</h4>
                            <input type="text" name="Nick"  id="Nick" class ="form-control" placeholder ="Nickname"  required>
                        

                        <h4>Contraseña</h4>
                            <input type="password" name="Pass" id="Pass" class ="form-control" placeholder ="Password" required>
                            <div class="form-check form-switch">
  <input class="form-check-input " type="checkbox" id="See" onclick="verpass(this);" >
  <label class="form-check-label " for="flexSwitchCheckDefault">Ver Contraseña</label>
</div>

                
                            <button class="btn btn-outline-danger btn-sm " type="submit" name="registro" > Inicio </button>
                       
                    </div>
                        

                    </form>
                




<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
        function verpass(cb){
            if(cb.checked)
            $('#Pass').attr("type","text");
            else
            $('#Pass').attr("type","password");
        }
    </script>
</body>
</html>
