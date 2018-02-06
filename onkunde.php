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
            <li><a href="http://localhost/projecten/11.5%20madlibs/index.php">Er heerst paniek...</a></li>
            <li><a href="http://localhost/projecten/11.5%20madlibs/Onkunde.php">Onkunde</a></li>
        </ul>
    </nav>

    <section>
      <form action="controller/reactie2.php" method='get'>
        <form action="controller/reactie2.php" method='get'>
          <h2>Onkunde</h2>
          <p>Wat zou je graag willen kunnen?</p><input name="bezigheid" type="text">
          <p>Met welke persoon kun je goed opschieten?</p><input name="persoon" type="text">
          <p>Wat is je favoriete getal?</p><input name="getal" type="text">
          <p>Wat heb je altijd bij je als je op vakantie gaat?</p><input name="vakantie" type="text">
          <p>Wat is je beste persoonlijke eigenschap?</p><input name="goedepersoonlijkheid" type="text">
          <p>Wat is je slechtste persoonlijke eigenschap?</p><input name="slechtstepersoonlijkheid" type="text">
          <p>Wat is het ergste wat je kan overkomen?</p><input name="ergstegebeurtenis" type="text">
          <br>
          <input class="button" type="submit" value="Versturen">
        </form>
    </section>
    <footer class="footer">Deze website is gemaakt door Spinoza</footer>
  </body>
</html>
