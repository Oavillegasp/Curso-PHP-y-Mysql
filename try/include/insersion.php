<?php
include "conexion.php";

if(isset($_POST['reg'])){
    
    $nom= $_POST['Nombre'];
    $ap1= $_POST['ApPt'];
    $ap2=$_POST['ApMt'];
    $genero="2";
    $tuser="1";
    $nickname= $_POST['Nick'];
    $corr =$_POST['Email'];
    $cont=$_POST['Pass'];

    $validar="SELECT * FROM usuarios WHERE Email = '$correo' || Nick ='$nickname'";
    $validacon= $conec->query($validar);
    if($validacon->num_rows >0){
        ?>
        <h3 class="ok"> Tu Nickname y/o Correo ya se encuentran registrados </h3>
        <?php

    }
    else{

    

    $conin = "INSERT INTO usuarios ( `Nombre`, `ApellidoP`, `ApellidoM`, `Id_Genero`, `Email`, `Id_Tusuario`, `Nick`, `Password`) VALUES ('$nom','$ap1','$ap2','$genero','$corr','$tuser','$nickname','$cont')";
    $guarcon = mysqli_query($conec, $conin);
    
    if($guarcon){
        ?>
        <h3 class="ok"> te has inscripto correctamente</h3>
        <?php
    }else {
        ?>
        <h3 class="bad"> ups no te has inscripto correctamente</h3>
        <?php
    
    }
}



  }

	

?>