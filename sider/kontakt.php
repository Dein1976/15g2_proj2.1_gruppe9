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
        <article class="article1">
          <br>
          <h1>Kontakt</h1>
          <p class="projekt">Har du kommentarer, idéer eller andre input til arbejdet omkring Multihuset,</p>
          <p class="projekt">er du meget velkommen til at skrive til os på:</p>
          <br>
          <p class="projekt">info(at)multihushjortshøj.dk.</p>
          <p class="projekt">Pressehenvendelser henvises til:</p>
          <p class="projekt">presse(at)multihushjortshøj.dk</p>
          <p></p>
        </article>

        <br>

        <article class="article">
          <section class="contact">
            <h1>Skriv en email</h1>
            <h3>Din e-mailadresse vil ikke blive offentliggjort. Krævede felter er markeret med *</h3>
          </section>

          <section class="contact1">
            <form action="kontakt-svar.php" method="post">
              

                <label for="firstName">Fornavn:*</label>
                <input type="text" name="firstName" id="firstName" value="" required/>

                <label for="lastName">Eftenavn:*</label>
                <input type="text" name="lastName" id="lastName" value="" required/>

                <label for="address">Addresse:</label>
                <input type="text" name="address" id="address" value="" />

                <label for="phone">Tlf. nr.:</label>
                <input type="text" name="phone" id="phone" value="" />

                <label for="email">Email:*</label>
                <input type="text" name="email" id="email" value="" required/>

                <label for="comments">Skriv dit svar:*</label>
                <textarea name="comments" id="comments" rows="6" cols="50" required> </textarea>

                <label for="shipping">Ønsker du et Multihus i Hjortshøj?*</label>
                <input type="radio" name="multi" id="multija" value="Ja" >Ja
                <input type="radio" name="multi" id="multinej" value="Nej" checked>Nej

                <label for="newsletter">Ønsker du at modtage nyt pr. email?</label>
                <input type="checkbox" name="newsletter" id="newsletter" value="Ja" />

                <div style="">
                  <input type="submit" name="submitButton" id="submitButton" value="Send email" />
                  <input type="reset" name="resetButton" id="resetButton" value="SLET al indtastning" />
                </div>
              
            </form>
          </section>
        </article>
    </section>
    
    <section>
    </section>

    <article>
    </article>
  
  <br>
  </main>


  <?php include 'footer.php';?>


</div>


</body>


</html>