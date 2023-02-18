<?php 

if(isset($_POST['ime'])){
  require_once 'baza.php';
  $izraz = $veza->prepare('
  
  insert into 
osoba(ime,prezime,email) 
values (:ime,:prezime,:email);
  
  ');

  $izraz->execute($_POST);

}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'; ?>   
  </head>
<body>
    <div class="grid-container">
      <?php 
      // čitati https://www.simplilearn.com/tutorials/php-tutorial/include-in-php
      require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">
          
          <form action="" method="post">

          <label for="ime">Ime</label>
          <input type="text" name="ime" id="ime">

          <label for="prezime">prezime</label>
          <input type="text" name="prezime" id="prezime">

          <label for="email">Email</label>
          <input type="text" name="email" id="email">

          <input type="submit" class="success button expanded" value="Unesi">

          </form>

          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>
    </div>
   <?php include_once 'skripte.php'; ?>
  </body>
</html>