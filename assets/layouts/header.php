<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-sm">

 <a class="navbar-brand">
  <img src="/ig/assets/img/logo.png" alt="logo" style="width:40px;">
</a>

<div class="collapse navbar-collapse " id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/ig">INFORME MENSUAL</a>
    </li>

    <?php
// Validación del tipo de usuario para mostrar o no mostrar opciones
    if (isset($_SESSION['tipo'])) {

      switch ($_SESSION['tipo']) {
        case 'A': //Administador

        ?>

        <li class="nav-item">
          <a class="nav-link" href="https://mex.000webhost.com/cpanel-login" target="_blank">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ig/sys/admin/qns/qns.php">Q&S</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ig/sys/admin/pass/">CAMBIAR CONTRASEÑA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link formatting" data-toggle="modal" data-target="#myModal">FORMATEAR SISTEMA</a>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title" style="margin: 10px">¿Realmente quieres borrar toda la información almacenada por completo?</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  <h4><strong>NOTA: </strong>Si borras, no hay forma de recuperar la información, no se respalda, tendrás que volverla a ingresar</h4>
                </div>

                <div class="modal-footer">
                  <form method="POST" action="/ig/sys/admin/forma/">
                    <input type="submit" class="btn btn-danger" id="eliminar" name="formatear" value="ESTOY DE ACUERDO">
                  </form>
                </div>

              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ig/sys/admin/docs/">DOCUMENTACIÓN</a>
        </li>

        <?php

        break;

        case 'S': //Supervisor

        ?>

        <li class="nav-item">
          <a class="nav-link" href="/ig/sys/admin/pass/">CAMBIAR CONTRASEÑA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link formatting" data-toggle="modal" data-target="#myModal">FORMATEAR SISTEMA</a>
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title" style="margin: 10px">¿Realmente quieres borrar toda la información almacenada por completo?</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  <h4><strong>NOTA: </strong>Si borras, no hay forma de recuperar la información, no se respalda, tendrás que volverla a ingresar</h4>
                </div>

                <div class="modal-footer">
                  <form method="POST" action="/ig/sys/admin/forma/">
                    <input type="submit" class="btn btn-danger" id="eliminar" name="formatear" value="ESTOY DE ACUERDO">
                  </form>
                </div>

              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ig/sys/admin/docs/">DOCUMENTACIÓN</a>
        </li>

        <?php

        default:

        break;
      }

    }

    ?>

  </ul>
</div>

<form class="float-lg-right">
  <a href="/ig/val/destroy.php" class="btn btn-danger btn-sm">CERRAR SESIÓN</a>
</form>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"><strong>↕</strong></span>
</button>

</nav>
