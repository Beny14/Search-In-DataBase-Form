<html>
<head>
	<title>Datele din bazele de date</title>
	<style>
		#pagina{
			text-align:center;
			word-spacing:10px;
			color:blue;
		}
	
	</style>
</head>
<body>
	<div id="pagina">
		<div id="cautare">
			<a href="formular.html">Index</a>
			<a href="adauga.php">Adauga</a><br/>
			<?php
			require 'connect.php';
			$query = "SELECT * FROM utilizatori";
			$result = mysqli_query($conexiune, $query);
			if(mysqli_num_rows($result) > 0 ){
				while($row = mysqli_fetch_assoc($result)){
					?>
						<div id="result">
							<a href="stergeContact.php?id=<?php echo $row['id'] ?>"> Sterge </a>
							<p>Nume: <?php echo $row['nume'] . " " . $row['prenume']; ?>;</p>
							<p>Parola: <?php echo $row['parola']; ?></p>
						</div>
					<?php
				}
			}else{
				echo "Nu exista utilizatori";
			}
			
			?>
		</div>
	</div>
</body>
</html>	