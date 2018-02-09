<!DOCTYPE html>
<html>
<head>
    <title>Mad Libs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
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
      <form action="controller/reactie1.php" method='get'>
        <h2>Er heerst paniek...</h2>
        <p>Welk dier zou je nooit als huisdier willen hebben</p><input name="dier" type="text">
        <p>Wie is de belangrijkste persoon in je leven?</p><input name="persoon" type="text">
        <p>In welk land zou je graag willen wonen?</p><input name="land" type="text">
        <p>Wat doe je als je je verveelt?</p><input name="verveeld" type="text">
        <p>Met welk speelgoed speelde je als kind het meest?</p><input name="speelgoed" type="text">
        <p>Bij welke docent spijbel je het liefst?</p><input name="docent" type="text">
        <p>Als je € 100.000,- had, wat zou je dan kopen?</p><input name="geld" type="text">
        <p>Wat is je favoriete bezigheid?</p><input name="bezig" type="text">
        <br>
        <input class="button" type="submit" value="Versturen">
      </form>
    </section>
    <footer class="footer">Deze website is gemaakt door Spinoza</footer>
  </body>
</html>
