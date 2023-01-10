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
          //nema eksplicitnog navodjenja tipa podatka//


            //STRING//
            $varijabla ='vrijednost';
            echo $varijabla, ' ', gettype($varijabla), '<hr>';

            //DOUBLE//
            $varijabla =3.14;
            echo $varijabla, ' ', gettype($varijabla), '<hr>';

            //INTEGER//
            $varijabla =3;
            echo $varijabla, ' ', gettype($varijabla), '<hr>';

            //1 BOOLEAN//
            $varijabla =true;
            echo $varijabla, ' ', gettype($varijabla), '<hr>';

            //ARRAY//            
            $varijabla =[ ];
            echo gettype($varijabla), '<hr>';

            //OBJECT//
            $varijabla =new stdClass();
            echo gettype($varijabla), '<hr>';


            $i=2; $j=3;
            echo "i=$i, j=$j", '<hr>';

            echo 'i=$i, j=$j', '<hr>';

            echo 'i=' . $i . ', j=' . $j , '<hr>';
                    
          ?>
          
          </div>          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
      <?php include_once 'skripte.php'; ?>
  </body>
</html>