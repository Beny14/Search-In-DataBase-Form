<?php
require 'connect.php';

if(isset($_POST['cautare'])){
	if(!empty($_POST['cautare'])){
		$cautare = trim($_POST['cautare']);
		$cautare = mysqli_real_escape_string($conexiune, $cautare);
		$query = "SELECT * FROM utilizatori WHERE nume LIKE '%{$cautare}%' OR prenume LIKE '%{$cautare}%'";
		$result = mysqli_query($conexiune, $query);
		if(mysqli_num_rows($result) > 0 ){
			while($row = mysqli_fetch_assoc($result)){
			?>
			<div id="result">
				<p>Nume: <?php echo $row['nume'] . " " . $row['prenume']; ?>;</p>
			</div>
			<?php
			}
			echo "Numarul de rezultate: " .mysqli_num_rows($result);
		}else{
			echo "Nu exista rezultatul acesta.";
		}
	}else{
		echo "Introduceti datele.";
	}
}
?>
