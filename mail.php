<?php

if(isset($_POST['epost'])) {

// mailen som kommer till mig/företaget.
$to  = "svensson_erica@hotmail.com";
$subject= "Vi har en ny beställning!";
$message = "Ny beställning mottagen:";
$message .= "Namn: " . $_POST['namn'];
$message .= "Epost" . $_POST['epost'];
$message .= "Adress: " . $_POST['adress'];
$message .= "Sko: " . $_GET['produkt'];
$message .= "Pris: " .  $_GET['pris'];
$message .= "Meddelande från kund: " . $_POST['meddelande'];
mail($to, $subject, $message);

//mailet som går till kund.
$to = $_POST['epost'];
$subject= "Din beställning är klar!";
$message .= "Hej, " . $_POST['namn'] . "!";
$message .= "Följande beställning har gjorts till oss:";
$message .= "Namn: " . $_POST['namn'];
$message .= "Epost" . $_POST['epost'];
$message .= "Adress: " . $_POST['adress'];
$message .= "Sko: " . $_GET['produkt'];
$message .= "Pris: " .  $_GET['pris'];
$headers = "From: svensson_erica@hotmail.com";
mail($to, $subject, $message, $headers);
}


//skickar kunden till startsidan.
header('Location: index.html');
exit();

//Följer en tutorial som har errorhantering också. 
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Du behöver åtgärda följande fel:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>