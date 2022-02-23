<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PW II</title>
</head>

<body>

	<?php

	include('conection.php');


	$sql = "select * from tb_produto";

	if ($result = $mysqli->query($sql)) {
		while ($obj = $result->fetch_object()) {

			echo "<b>Código:</b> $obj->cd_produto
				<br> <b>Nome:</b> $obj->nm_produto
				<br> <b>Valor:</b> $obj->vl_produto 
				<br>";

	?>
			<a href="delete.php?produto= 
			<?php

			echo $obj->cd_produto;

			?>
		">APAGAR</a><br><br>
	<?php


		}
	} else {
		echo $result->error;
	}


	?>

</body>

</html>