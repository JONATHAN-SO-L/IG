<?php

require '../../../../settings/conexion.php';

// Suma total de todos los registros de PR's
$sentence = "SELECT SUM(publicaciones) AS pr_total_pub FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PR'";
$low = mysqli_query ($cn, $sentence);
$t_pr_pub = mysqli_fetch_assoc ($low);

$query = "SELECT SUM(videos) AS pr_total_vid FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PR'";
$row = mysqli_query ($cn, $query);
$t_pr_vid = mysqli_fetch_assoc ($row);

$sql = "SELECT SUM(horas) AS pr_total_hr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PR'";
$flow = mysqli_query ($cn, $sql);
$t_pr_hr = mysqli_fetch_assoc ($flow);

$feet = "SELECT SUM(revisitas) AS pr_total_rv FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PR'";
$six = mysqli_query ($cn, $feet);
$t_pr_rv = mysqli_fetch_assoc ($six);

$benz = "SELECT SUM(cursos) AS pr_total_cr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PR'";
$batman = mysqli_query ($cn, $benz);
$t_pr_cr = mysqli_fetch_assoc ($batman);



// Suma total de todos los registros de PA's
$sentence1 = "SELECT SUM(publicaciones) AS pa_total_pub FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PA'";
$low1 = mysqli_query ($cn, $sentence1);
$t_pa_pub = mysqli_fetch_assoc ($low1);

$query1 = "SELECT SUM(videos) AS pa_total_vid FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PA'";
$row1 = mysqli_query ($cn, $query1);
$t_pa_vid = mysqli_fetch_assoc ($row1);

$sql1 = "SELECT SUM(horas) AS pa_total_hr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PA'";
$flow1 = mysqli_query ($cn, $sql1);
$t_pa_hr = mysqli_fetch_assoc ($flow1);

$feet1 = "SELECT SUM(revisitas) AS pa_total_rv FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PA'";
$six1 = mysqli_query ($cn, $feet1);
$t_pa_rv = mysqli_fetch_assoc ($six1);

$benz1 = "SELECT SUM(cursos) AS pa_total_cr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PA'";
$batman1 = mysqli_query ($cn, $benz1);
$t_pa_cr = mysqli_fetch_assoc ($batman1);




// Suma total de todos los registros de PUB's
$sentence2 = "SELECT SUM(publicaciones) AS pub_total_pub FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PUB'";
$low2 = mysqli_query ($cn, $sentence2);
$t_pub_pub = mysqli_fetch_assoc ($low2);

$query2 = "SELECT SUM(videos) AS pub_total_vid FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PUB'";
$row2 = mysqli_query ($cn, $query2);
$t_pub_vid = mysqli_fetch_assoc ($row2);

$sql2 = "SELECT SUM(horas) AS pub_total_hr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PUB'";
$flow2 = mysqli_query ($cn, $sql2);
$t_pub_hr = mysqli_fetch_assoc ($flow2);

$feet2 = "SELECT SUM(revisitas) AS pub_total_rv FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PUB'";
$six2 = mysqli_query ($cn, $feet2);
$t_pub_rv = mysqli_fetch_assoc ($six2);

$benz2 = "SELECT SUM(cursos) AS pub_total_cr FROM $table2 WHERE id_pub BETWEEN 101 AND 120 AND tipo = 'PUB'";
$batman2 = mysqli_query ($cn, $benz2);
$t_pub_cr = mysqli_fetch_assoc ($batman2);

?>
