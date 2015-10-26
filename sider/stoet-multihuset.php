<!DOCTYPE html>
<html lang="en">

<!-- 
===========================================================
Projekt 2.1: Underside 5.
===========================================================
-->

<?php include 'head.php';?>


<body>
<div class="page">


  <?php include 'header.php';?>
  
  <main>

    <?php include 'aside2.php';?>

    <section class="projekt1">
        <article class="article">
          <h2 class="projekt">Støt Multihuset Hjortshøj – Meld dig ind i Støtteforeningen!</h2>
          <p>Bliv medlem af Støtteforeningen for Multihuset Hjortshøj og bidrag til etableringen af multihuset.</p>
          <p>Medlemskabet koster 100 kr. for et år og fornys hver år i maj uanset indmeldelsestidspunkt.</p>
          <h3>Sådan indmelder du dig</h3>
          <p>Du kan melde dig ind i foreningen enten ved at udfylde skemaet nedenfor (og efterfølgende betale via Netbank) eller via  Mobilepay ved at overføre 100 kr. til 91 10 76 93 (husk at anføre din emailadresse i kommentarfeltet).</p>  
          <p>Med din indmeldelse accepterer du automatisk opkrævning af kontingent samt de betingelser der fremgår af vedtægterne. Kontingentet ikke blive tilbagebetalt i tilfælde af at Multihus Hjortshøj ikke bliver en realitet.</p>
          <br>


          <section class="contact">
            <h1>Stamdata</h1>
            <h3>Krævede felter er markeret med *</h3>
          </section>

          <section class="contact1">
            <form action="indmeld-svar.php" method="post">
              

                <label for="firstName">Fornavn/firmanavn:*</label>
                <input type="text" name="firstName" id="firstName" value="" required/>

                <label for="lastName">Eftenavn:*</label>
                <input type="text" name="lastName" id="lastName" value="" required/>

                <label for="address">Addresse:*</label>
                <input type="text" name="address" id="address" value="" />

                <label for="phone">Tlf. nr.:*</label>
                <input type="text" name="phone" id="phone" value="" />

                <label for="email">Email:*</label>
                <input type="text" name="email" id="email" value="" required/>

                <label for="comments">Har du kommentarer?:</label>
                <textarea name="comments" id="comments" rows="6" cols="50" required> </textarea>

                <label for="newsletter">Ønsker du at modtage nyt pr. email?</label>
                <input type="checkbox" name="newsletter" id="newsletter" value="Ja" />

                <div style="">
                  <input type="submit" name="submitButton" id="submitButton" value="Send email" />
                  <input type="reset" name="resetButton" id="resetButton" value="SLET al indtastning" />
                </div>
              
            </form>
          </section>
          <br>
          <p></p>
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