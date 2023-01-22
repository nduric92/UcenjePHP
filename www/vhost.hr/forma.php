<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
  $prvibroj=(int)$_POST['prvibroj'];
  $drugibroj=(int)$_POST['drugibroj'];
  if($prvibroj===0){
    $prvibroj='';
  }
  if($drugibroj===0){
    $drugibroj='';
  }
  if($prvibroj!=='' && $drugibroj!==''){
    $rez=$prvibroj + $drugibroj;
  }else{
    $rez='';
  }
}else{
  $prvibroj='';
  $drugibroj='';
  $rez='';
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
           
        
            <h1>Forma sabiranje dva broja</h1><hr>

              <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="prvibroj">Prvi broj</label>
                <input type="text" name="prvibroj" id="prvibroj" value="<?=$prvibroj?>">

                <label for="drugibroj">Drugi broj</label>
                <input type="text" name="drugibroj" id="drugibroj" value="<?=$drugibroj?>"><br><hr>

                <h1><?=$rez?></h1>

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