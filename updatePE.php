<?php

include("conexionPE.php");
$con=conectar();

$id_per_aca=$_POST['id_per_aca'];
$nom_per=$_POST['nom_per'];


$sql="UPDATE periodo SET nom_per='$nom_per' WHERE id_per_aca='$id_per_aca'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: periodo.php");
    }
?>