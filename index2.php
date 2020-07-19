<?php

$conect = new mysqli('localhost', 'root', '', 'datos_paginacion');

if ($conect->connect_errno) {
    die('Sever error!');
} else {

    $pag     = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
    $artxpag = 5;

    $inicio = ($pag > 1) ? ($pag * $artxpag - $artxpag) : 0;

    $sql = $conect->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos_pag LIMIT $inicio, $artxpag");
    $sql->execute();

    if ($sql->affected_rows >= 1) {
        echo 'filas afectadas: ' . $sql->affected - rows;
    }

}

require 'index.view.php';
