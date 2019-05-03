
<!DOCTYPE html>
<html lang="ca">
<head><link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">
<?php
// Connecta amb la BD 'my_db'
$con = mysqli_connect('localhost', 'root', '', 'xat');
// Comprova la connexió
if (mysqli_connect_errno()) {
 echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
// Executa una consulta
$sql = "SELECT * FROM `missatges` ORDER BY id DESC";
$result = mysqli_query($con, $sql);

// Obté el resultat de la consulta com a un array associatiu i processa'l

while ($row = mysqli_fetch_assoc($result)) { ?>
 <p> <?php echo $row['usuari']; ?>  <?php echo $row['hora'] ; ?> <?php echo $row['text']  ;?> </p>

<?php
}
// Allibera recursos del resultat de la consulta
mysqli_free_result($result);
// Tanca la connexió
mysqli_close($con);
?>

 </section>
 <section id="formulari">
 <form method="post" action="insertar.php">
	<input type="text" name="nom" size="40" maxlength="20" placeholder="El teu Nom"></p>
	<input type="text" name="text" size="40" placeholder="El teu Missatge"></p>
	<p><a href="insertar.php"><input type="submit" value="Xateja-ho"/></p>
 </form>
 </section>
 <section id="errors">
 <p>línia per mostrar missatges d'error</p>
 </section>
 </body>
</html>