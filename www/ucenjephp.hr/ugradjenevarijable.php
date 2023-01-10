<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'; ?>
  </head>

  <body>
    <div class="grid-container">
      <?php require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">

          <?php
          
          echo $_GET['kljuc'], '<hr>';

          echo '<pre>';
          print_r($_GET);
          echo '</pre>', '<hr>';
          
          echo '<pre>';
          var_dump($_GET);
          echo '</pre>', '<hr>';

          $broj= $_GET['t'] + 7;
          echo $broj, ' ', gettype($broj), '<hr>';
          
          
          ?>

          </div>          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
      <?php include_once 'skripte.php'; ?>
  </body>
</html>