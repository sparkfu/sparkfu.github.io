<!DOCTYPE html>
<html>
<head>
	<title>Nutzerdaten speichern</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	   <input type="text" name="name" placeholder="Name"><br>
	   <input type="email" name="email" placeholder="E-Mail"><br>
	   <input type="submit" value="Speichern">
	</form>

	<?php
	   if($_SERVER["REQUEST_METHOD"] == "POST"){
	       $name = $_POST['name'];
	       $email = $_POST['email'];
	       
	       $datei = fopen("daten.txt", "a") or die("Kann die Datei nicht öffnen.");
	       $text = $name . ";" . $email . "\n";
	       fwrite($datei, $text);
	       fclose($datei);
	       
	       echo "Die Daten wurden erfolgreich gespeichert.";
	   }
	?>
</body>
</html>
