

<?php

include('conection.php');

$sql = "delete from tb_produto where cd_produto =". $_GET['produto'];

if ($result = $mysqli -> query($sql)) {
	?>
	<script type="text/javascript">
		
		alert('Produto deletado!');
		window.location.href = 'index.php';
	</script>
 
 <?php

} else{
echo $result ->error;
}

?>