<?php

include "include/conexion.php";


if(isset($_POST['ingresar'])){


    $usr=$conec->real_escape_string($_POST['user']);
    $paw=$conec->real_escape_string($_POST['pass']);
    
    $consel="SELECT * FROM usuarios WHERE Nick='$usr' and Password = '$paw'";
    if($resultado=$conec->query($consel)){
        while($row=$resultado->fetch_array()){
            $userok =$row['Nick'];
            $passok =$row['Password'];

        }
        $resultado->close();

    }
    $conec->close();
      if(isset($us)  && isset($pas)){
          if($us==$userok && $pas== $passok){
            $_SESSION['login']= TRUE;
            $_SESSION['Usuario']= $usuario;

            header("location:index.html");
        }
        else{
            
            
            header("location:Recuperar vfast.html");
        
       }
    }


}

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
    <script src="js/vfast login.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
        <div class="container col-12 p-5 mt-5 ">

        <div class="row">

            <div class="container col-6 border shadow p-2" ><br><br>
                <img src="img/vfast_png.png" alt="" class="img-thumbnail img-fluid border-0 w-100 h-auto justify-content-center align-items-center">
            </div>

        <div class="container col-6 border shadow p-2">
            <form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
                <h2 class="text-center display-5 mt-3"> | VFAST | <span class="text-warning"></span></h2>
        <h3 class="text-center display-5 mt-3"> | Inicio Sesión | <span class="text-warning"></span></h3>
        <h4>Nombre de Usuario</h4>
        <input type="text" name="user" placeholder="Ingrese nombre de usuario" id="Name" class="form-control w-75 mx-auto" >
    
        <h4>Contraseña</h4>
        <input type="password" name="pass" placeholder="Ingrese su contraseña" id="Pass" class="form-control w-75 mx-auto" >

        <div class="form-check form-switch">
  <input class="form-check-input " type="checkbox" id="See" onclick="verpass(this);" >
  <label class="form-check-label " for="flexSwitchCheckDefault">Ver Contraseña</label>
</div>

<div class="row mx-auto text-center">
                    <div class="col mx-auto">
                        <a href="recuperar.html" target="_blank">Recuperar Contraseña</a>

                    </div>

                     <div class="col mx-auto">
                        <a href="Registro vfast definitivo.html" target="_blank">Registrarse en VFAST</a>

                    </div>
</div>                    

                    <div class=" d-grid gap-2 col-6 mx-auto mb-5">
                      <button class="btn btn-danger" type="submit" Value="entrar" name="ingresar" onclick="validar()">Iniciar Sesion</button>
                    </div>
                     </form>
         </div>   
            
    </div>
     </div>
   
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