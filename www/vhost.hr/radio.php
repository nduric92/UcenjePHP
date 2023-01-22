<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(isset($_POST['voce'])){
    $voce=$_POST['voce'];
  }else{
    $voce='';
  }
}else{
    $voce='';
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
           
        
            <h1>Radio od vise odabires jedan</h1><hr>

              <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                
              <input type="radio" name="voce" 
              <?php if($voce==='jabuka'):?>
                checked="checked"
                <?php endif;?>
              id="jabuka" value="jabuka">
              <label for="jabuka">Jabuka</label>


              <input type="radio" name="voce" 
              <?php if($voce==='kruska'):?>
                checked="checked"
                <?php endif;?>
                id="kruska" value="kruska">
              <label for="kruska">Kruska</label>


              <input type="radio" name="voce" 
              <?php if($voce==='lubenica'):?>
                checked="checked"
                <?php endif;?>
                id="lubenica" value="lubenica">
              <label for="lubenica">Lubenica</label>


              <br>
              <?=$voce?><br>
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