<!DOCTYPE html>
<html lang="en">

<!-- 
===========================================================
Projekt 2.1: Underside 6.
===========================================================
-->

<?php include 'head.php';?>


<body>
<div class="page">


  <?php include 'header.php';?>
  
  <main>

  <?php include 'aside.php';?>

  <section class="projekt1"> 
  <section class="contact">

    <h1>Tak!</h1>
    <p>Tak for din email! Vi vil svare hurtigst muligt.</p>
    <p>Her er hvad du har sendt til os:</p>

    <dl>
      <dt>Fornavn</dt><dd><?php echo $_POST["firstName"]?></dd>
      <dt>Eftenavn</dt><dd><?php echo $_POST["lastName"]?></dd>
      <dt>Addresse</dt><dd><?php echo $_POST["address"]?></dd>
      <dt>Tlf. nr.</dt><dd><?php echo $_POST["phone"]?></dd>
      <dt>Email</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Ønsker du et Multihus i Hjortshøj?</dt><dd><?php echo $_POST["multi"]?></dd>
      <dt>Ønsker du at høre nyt pr. email?</dt><dd><?php echo $_POST["newsletter"]?></dd>
      <dt>Dit email svar</dt><dd><?php echo $_POST["comments"]?></dd>
    </dl>
  
  </section>
  </section>
  
  <br>
  </main>

  <?php include 'footer.php';?>


</div>


</body>


</html>