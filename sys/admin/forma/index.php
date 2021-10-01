<?php

session_start();

if (isset($_SESSION['tipo'])) {

  switch ($_SESSION['tipo']) {
    case 'U':
    echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
    break;
    
    default:

    break;
  }
}

if (isset($_SESSION['usuario'])) {} 
  else {
    echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/ig">';
  }

  function drop_month(){
    require '../../../settings/conexion.php';
    $sql_month = "TRUNCATE $table1";
    mysqli_query($cn, $sql_month);
    require '../../../settings/close.php';
  }

  function drop_pubs(){
    require '../../../settings/conexion.php';
    $sql_pubs = "TRUNCATE $table2";
    mysqli_query($cn, $sql_pubs);
    require '../../../settings/close.php';
  }

  drop_month();
  drop_pubs();

  echo "<script>alert('PARA FINALIZAR EL PROCESO Y GUARDAR LOS CAMBIOS, DEBERÁS VOLVER A INICIAR SESIÓN')</script>";
  echo "<meta http-equiv='refresh' content='0; url=/ig/val/destroy.php'>";

  ?>
