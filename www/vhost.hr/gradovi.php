<?php 
$gradovi=['Izaberi grad', 'Osijek', 'Zagreb', 'Donji Miholjac'];//za gradove samo arrey u ovom slucaju
if($_SERVER['REQUEST_METHOD']==='POST'){

  $grad=$_POST['grad'];

}else{
    $grad=$gradovi[0];
}

?>

<!-- FORMA U VHOSTU -->

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
           
        
            <h1>select - padajuca lista</h1><hr>

              <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

                <label for="grad">Grad</label>     
                <select name="grad" id="grad">
                  <?php foreach($gradovi as $g): ?>
                    <option 
                    <?php if($grad===$g): ?>
                      selected="selected"
                      <?php endif; ?>
                    value="<?=$g?>"><?=$g?></option>
                    <?php endforeach; ?>
                </select>         

                  
                <br>

                <input class="button" type="submit" value="IZRACUNAJ">
              </form>


          </div>          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
      <?php include_once 'skripte.php'; ?>
  </body>
</html>