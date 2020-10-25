<?php
if(isset($_POST['id'])){
	$id = $POST['id'];
	require 'connect.php';
	$query = "DELETE FROM utilizatori WHERE id = {$id}";
	mysqli_query($conexiune, $query);
	header("Location: sterge.php");
}
?>