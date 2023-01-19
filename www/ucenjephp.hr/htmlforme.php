<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
  $pb=(int)$_POST['pb'];
  $db=(int)$_POST['db'];
  if($pb===0){
    $pb='';
  }
  if($db===0){
    $db='';
  }
  if($pb!=='' && $db!==''){
    $rez=$pb + $db;
  }else{
    $rez='';
  }
}else{
  $pb='';
  $db='';
  $rez='';
}


?>





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
           
        
            <form action="<?=$_SERVER['PHP_SELF']?>" 
          method="post">

          <!-- Foundation RWD style, nije baš po PS -->
          <label> Prvi broj
            <input type="text" name="pb" value="<?=$pb?>">
          </label>

          <!-- Tehnički po https://validator.w3.org/ ispravno -->
          <label for="db">Drugi broj</label>
          <input type="text" name="db" id="db" value="<?=$db?>">
          <h1><?=$rez?></h1>
          <input class="success button expanded" type="submit" value="Izračunaj">
        
          </form>








          </div>          
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>      
    </div>
      <?php include_once 'skripte.php'; ?>
  </body>
</html>
