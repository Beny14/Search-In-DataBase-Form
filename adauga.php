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
			<a href="sterge.php">Sterge</a><br><br>
			<form action="adauga.php" method="POST">
			<label>Nume:<br/>
				<input type="text" name="nume"></label><br/>
			<label>Prenume:<br/>
				<input type="text" name="prenume"></label><br/>
			<label>Parola:<br/>
				<input type="text" name="parola"></label><br/>
				<input type="submit" name="adauga" value="Adauga"><br/>
			</form>
		</div>
		<div id="mesaj">
			<?php
			if(isset($_POST['adauga'])){
				if(isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['parola'])){
					if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['parola'])){
						$nume = trim($_POST['nume']);
						$prenume = trim($_POST['prenume']);
						$parola = trim($_POST['parola']);
						require 'connect.php';
						$nume = mysqli_real_escape_string($conexiune, $nume);
						$prenume = mysqli_real_escape_string($conexiune, $prenume);
						$parola = mysqli_real_escape_string($conexiune, $parola);
						
						$query = "INSERT INTO utilizatori (nume, prenume, parola) VALUES ('{$nume}', '{$prenume}', '{$parola}')";
						if(mysqli_query($conexiune, $query) === TRUE ){
							echo "Adaugata cu succes";
						}else{
							echo "Nu a fost adaugata";
						}
					}else{
						echo "Parametrii nu sunt completati";
					}
				}else{
					echo "Parametrii sunt trimisi";
				}
			}
			?>
		</div>
	</div>
</body>
</html>	