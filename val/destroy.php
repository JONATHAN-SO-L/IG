<?php

session_start();	// Confirma la sesión iniciada
session_unset();	// Vacía la caché de la sesión
session_destroy();	// Cierra la sesión
echo "<meta http-equiv='refresh' content='0; url=/ig/'>";	// Redirige al login

?>