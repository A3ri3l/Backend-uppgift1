<!-- Allt det här (som funkar) borde ligga i index.html... -->
    <?php

//Sett massa tutorials som använder bilden i sin array... inte fattat om jag behöver det när 
//jag använder template från bootstrap.
    $skor = array (

        array("Vita skor", "../bilder/skor1.jpg", "500 kr"),
        array("Snake", "../bilder/skor2.jpg", "600 kr"),
        array("Rosa skor", "../bilder/skor3.jpg", "700 kr"),
        array("Birds", "../bilder/skor4.jpg", "800 kr"),

    );

    //test
    echo "<pre>";
    print_r($skor);
    echo "</pre>";

    //hämta data från arrayen med hjälp av indexering
    //jag vill skriva ut alla produkter med hjälp av posititon (echo)
    foreach($skor as $sko){
        echo $sko[0] . "<br>";
     }

   
     foreach($skor as $sko){
        echo $sko[2] . "<br>";
     }

     //Skriva ut tabell
     echo "<table border=2>";
     echo "<tr><th>Produkt</th><th>Pris</th></tr>";

     foreach($skor as $sko) {
         echo "<tr>";
         echo "<td>$sko[0]</td>";
         echo "<td>$sko[2]</td>";
         echo "</tr>";
     }

     //skriv ut en lista över produkt och pris
     echo "<ul>";

     foreach($skor as $sko) {
        echo "<li>";
            echo "<li>$skor[0], $skor[2]";
        echo "</li>";
     }

     echo "</ul>";




     //skicka till ett formulär. Vi börjar med att skicka till en annan sida.
     //GET-metoden.
     ?>

     
    <?php foreach($kor as $sko) : ?>
    <h3>
        <!-- borde jag skicka till mail oxå? -->
     <a href="formulär.php?produkt?=<?=$sko[0]?>&mail=<?=$sko[2]?>"
         <?=$sko[0]?>
     </a>
    </h3>
    <?php endforeach; ?>





    <!-- $customer = array("namn", "adress", "epost", "meddelande", "sko");

    // behövs för att skicka bekräftelsen? Kan jag lista alla i samma []?
    if(isset($_GET['namn']));

    if(isset($_GET['adress']));

    if(isset($_GET['epost']));

    if(isset($_GET['sko'])); -->


