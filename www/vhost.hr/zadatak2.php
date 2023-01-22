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
            zadatak2
            <hr>
          Za primljeni kljuc grad stranica ispisuje ime grada
          sve velikim slovima crvenom bojom
            <hr>
          <div style="text-transform: uppercase; color: red;">
            <?php             
            echo $_GET ['grad'];            
            ?>
          </div>       
        
        </div>
          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
    <?php include_once 'skripte.php'; ?>
  </body>
</html>
