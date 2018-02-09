<?php
  $text = "<p>Er zijn veel mensen die niet kunnen ".$_GET['bezigheid'].".</p>
  <p>Neem nou ".$_GET['persoon'].".</p>
  <p>Zelfs met de hulp van een ".$_GET['vakantie']." of zelfs ".$_GET['getal']." kan ".$_GET['persoon']." niet ".$_GET['bezigheid'].".</p>
  <p>Dat heeft niet te maken met een gebrek aan ".$_GET['goedepersoonlijkheid'].", maar met een te veel aan ".$_GET['slechtstepersoonlijkheid'].".</p>
  <p>Te veel ".$_GET['slechtstepersoonlijkheid']." leidt tot ".$_GET['ergstegebeurtenis']." en dat is niet goed als je wilt ".$_GET['bezigheid']."</p>
  <p>Helaas voor ".$_GET['persoon']."</p>";
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
       <h2>Onkunde</h2>
       <?php print($text) ?>
     </section>
     <footer class="footer">Deze website is gemaakt door Spinoza</footer>
   </body>
 </html>
