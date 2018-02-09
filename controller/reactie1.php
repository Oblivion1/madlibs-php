<?php
  $text = "<p>Er heerst paniek in het konginkrijk ".$_GET['land'].". Koning ".$_GET['docent']." is ten einde raad en als koning ".$_GET['docent']." ten einde raad is,dan roept hij zijn ten-einde-raadsheer ".$_GET['persoon']."</p>
  <p>".$_GET['persoon']."! het is een ramp het is een schande!</p>
  <p>Sire, Majesteit, Uwe Luidrichtigheid, wat is er aan de hand?</p>
  <p>Mijn ".$_GET['dier']." is verdwenen! Zo maar, zonder waarschuwing. en ik had net ".$_GET['speelgoed']." voor hem gekocht!</p>
  <p>Majesteit, uw ".$_GET['dier']." komt vast wel weer terug?</p>
  <p>Ja's da's leuk en aardig, maar hoe moet ik inde tussentijd ".$_GET['bezig']." leren?</p>
  <p>Maar Sire, daar kunt u toch uw ".$_GET['geld']." voor gebruiken.</p>
  <p>".$_GET['persoon'].", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.</p>
  <p>".$_GET['verveeld'].", Sire.</p>";
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>madlibs</title>
     <link rel="stylesheet" href="../css/style.css">
   </head>
   <body>
     <h1>Mad Libs</h1>
         <nav>
         <ul>
            <li><a href="http://localhost/projecten/12.%20madlibs/index.php">Er heerst paniek...</a></li>
            <li><a href="http://localhost/projecten/12.%20madlibs/Onkunde.php">Onkunde</a></li>
         </ul>
     </nav>

     <section>
       <h2>Er heerst paniek...</h2>
       <?php print($text) ?>
     </section>
     <footer class="footer">Deze website is gemaakt door Spinoza</footer>
   </body>
 </html>
