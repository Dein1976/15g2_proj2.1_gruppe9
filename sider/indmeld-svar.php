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

  <?php include 'aside2.php';?>

  <section class="projekt1"> 
  <section class="contact">

    <h1>Tak!</h1>
    <p>Tak for din tilmelding!</p>
    <p>Her er hvad du har sendt til os:</p>

    <dl>
      <dt>Fornavn/firmanavn</dt><dd><?php echo $_POST["firstName"]?></dd>
      <dt>Eftenavn</dt><dd><?php echo $_POST["lastName"]?></dd>
      <dt>Addresse</dt><dd><?php echo $_POST["address"]?></dd>
      <dt>Tlf. nr.</dt><dd><?php echo $_POST["phone"]?></dd>
      <dt>Email</dt><dd><?php echo $_POST["email"]?></dd>
      <dt>Ønsker du at høre nyt pr. email?</dt><dd><?php echo $_POST["newsletter"]?></dd>
      <dt>Dine kommentarer</dt><dd><?php echo $_POST["comments"]?></dd>
    </dl>
  
  </section>
  </section>
  
  <br>
  </main>

  <?php include 'footer.php';?>


</div>


</body>


</html>