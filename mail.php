<?php
// echo "<h2> HJÄÄÄLP</h2>";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo $_POST['epost'];

if(isset($_POST['epost'])) {

// mailen som kommer till mig/företaget.
$to  = "svensson_erica@hotmail.com";
$subject= "Vi har en ny beställning!";
$message = "Ny beställning mottagen:";
$message .= "Namn: " . $_POST['namn'];
$message .= "Adress: " . $_POST['adress'];
$message .= "Sko: " . $_POST['produkt'];
$message .= "Pris: " .  $_POST['pris'];
$message .= "Meddelande från kund: " . $_POST['meddelande'];
$headers = "From: " . $_POST['epost'];
mail($to, $subject, $message, $headers);

//mailet som går till kund.
$to = $_POST['epost'];
$subject= "Din beställning är klar!";
$message .= "Hej, " . $_POST['namn'] . "!";
$message .= "Följande beställning har gjorts till oss:";
$message .= "Namn: " . $_POST['namn'];
$message .= "Adress: " . $_POST['adress'];
$message .= "Sko: " . $_POST['produkt'];
$message .= "Pris: " .  $_POST['pris'];
$headers = "From: svensson_erica@hotmail.com";
mail($to, $subject, $message, $headers);
 }

//skickar kunden till startsidan.
header('Location: index.php');

?>