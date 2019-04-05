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


?>

<!DOCTYPE html>
<html lang="ca">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">
	<?php while ($row = mysqli_fetch_assoc($result)) { ?>
 	<p>
 		<span>
 		<?php 
 			echo $row['hora']; ?>
 		</span>
 		<span>
 		<?php
 			echo $row['usuari']; ?>
 		</span>
 		<span>
 		<?php
 			echo $row['text']; ?>
 		</span>
 	</p>



<?php } ?>
<!--p><span>10:45PM - Homer: </span>Never mind.</p-->
<!--p><span>10:44PM - Marge: </span>Well, who was it?</p-->
<p><span>10:40PM - Homer: </span>I'll look it up.</p>
<p><span>10:39PM - Homer: </span>Fine.</p>
<p><span>10:39PM - Marge: </span>I really think that was the character's name, Don Quixote.</p>
<p><span>10:38PM - Homer: </span>No!</p>
<p><span>10:37PM - Marge: </span>Don Quixote</p>
<p><span>10:36PM - Homer: </span>No, that's not it. What's his name? "The Man of La Mancha."</p>
<p><span>10:36PM - Marge: </span>Don Quixote?</p>
<p><span>10:34PM - Homer: </span>I'm like that guy, that Spanish guy. You know, he fought the windmills.</p>
</section>
<br>
<section id="formulari">
<form method="post" action="insertar.php">
<p><input type="text" name="mensaje" value="el teu nom"></p>
<p><input type="text" name="mensaje" value="el teu missatge"></P>
<p align="center"><input type="submit" value="xateja-ho"></p>
</form>
</section>
<section id="errors">
<p >linia per mostrar missatges d'error</p>
</section>
</body>
</html>
