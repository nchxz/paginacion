<!DOCTYPE html>
<html>
<head>
	<title>Paginacion!</title>
	<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>

<body>

<div class="contenedor">
		<h1>Articulos!</h1>
	<section class="articulos">
		<ul>

		<?php foreach ($articulos as $articulo): ?>
		<li><?php echo $articulo['id'] . ' - ' . $articulo['texto']; ?></li>
		<?php endforeach?>

		<!--
		<li>1 - Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
		<li>2 - Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
		<li>3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
		<li>4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
		-->
		</ul>
	</section>

	<section class="paginacion">
		<ul>

		<?php if ($pagina == 1): ?>
		<li class="disabled">&laquo;</a></li>
		<?php else: ?>
		<li><a href="?pagina=<?php $pagina - 1?>">&laquo;</a></li>
		<?php endif?>

		<?php

for ($i = 1; $i <= $numeroPaginas; $i++) {
    if ($pagina == $i) {
        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
    } else {
        echo "<li><a href='?pagina=$i'>$i</a></li>";
    }
}

?>

		<?php if ($pagina == $numeroPaginas): ?>
		<li class="disabled">&raquo;</a></li>
		<?php else: ?>
		<li><a href="?pagina=<?php $pagina + 1?>">&raquo;</a></li>
		<?php endif?>

		<!--
		<li class="disabled">&laquo;</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">&raquo;</a></li>
		-->

		</ul>
	</section>
</div>

</body>
</html>
