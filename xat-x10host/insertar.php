<p><?php echo "soc la pagina insertar.php" ?></p>
<p><?php echo htmlspecialchars($_POST['nom']); ?></p>
<p><?php echo htmlspecialchars($_POST['text']); ?></p>
<?php

include 'connexioBD.php';

$nom = $_POST['nom'];
$text =  $_POST['text'];
$hora = date("H:i:s");


// Create connection

// Check connection
if ($nom == '' || $text == '' ) {
    $MensajError = "No es pot introduir espis buits";
} 

else{$sql = "INSERT INTO missatges (id,usuari,text,hora) 
VALUES ('','$nom','$text','$hora')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
header("Location: index.php");
exit();
mysqli_close($conn);
?>