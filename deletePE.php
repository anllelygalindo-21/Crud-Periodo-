<?php

include("conexionPE.php");
$con=conectar();

if(isset($_GET['id_per_aca'])) {
  $id_per_aca = $_GET['id_per_aca'];
  $query = "DELETE FROM periodo WHERE id_per_aca='$id_per_aca'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: periodo.php"); 
}

?>