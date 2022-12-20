<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'; ?>
  </head>

<body <?php
//Dobra praksa otvoreno/zatvoreno unutar atributa elementa
echo 'style="background-color: gray"'?>>

    <div class="grid-container">
      <?php require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <?php //dobra praksa je otovoriti/zatvoriti php unutar vrijednosti atributa ?>
          <div class="<?='callout'?>" id="tijelo">
            <!-- Dobra praksa otvoriti i zatvoriti PHP unutar elementa -->

            <?php
            echo 'PHP na dobrom mjestu!'

            ?>
          </div>
          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
