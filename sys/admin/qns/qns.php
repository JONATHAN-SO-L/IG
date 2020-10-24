<!DOCTYPE html>
<html lang="es">
<head>
	<title>INFORME DE GRUPO</title>
	<link rel="icon" href="/ig/assets/img/logo.png" type="image/icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/ig/css/panel_admin.css">
	<link rel="stylesheet" type="text/css" href="/ig/css/subir.css">
	<script src="/ig/js/subir.js"></script>
</head>
<body>

	<?php include '../../../assets/layouts/header2.php'; ?>

	<br><h2 class="titulo_admin">APARTADO DE Q&S</h2>

	<span class="ir-arriba"><img class="flecha" src="https://th.bing.com/th/id/OIP.uKDR0QxG651E2BynzO95BQHaHa?w=193&h=193&c=7&o=5&pid=1.7"></span>

	<div class='container'>
    <table class='table table-dark table-hover'>
      <thead>
        <tr>
          <th><center><strong>ID</strong></center></th>
          <th><center><strong>NOMBRE</strong></center></th>
          <th><center><strong>MENSAJE</strong></center></th>
        </tr>
        <br>
      </thead>
      <tbody>

        <?php

        include "../../../settings/conexion.php";

        $sql = "SELECT * FROM q_n_s";
        $query = mysqli_query ($cn, $sql);

        while ($qns = mysqli_fetch_array ($query)){

          echo "
          <tr>
          <td><center>".$qns ['id_qns']."</center></td>
          <td><center>".$qns ['nombre']."</center></td>
          <td><center>".$qns ['q_or_s']."</center></td>
          </tr>
          ";
        }

        include "../../../settings/close.php";

        ?>

      </tbody>
    </table>
  </div>

	<?php include '../../../assets/layouts/footer.php'; ?>

</body>
</html>
