<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){

  if(isset($_POST['povrce'])){
    $povrce=$_POST['povrce'];
  }else{
    $povrce=[];
  }

}else{
    $povrce=[];
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
           
        
            <h1>Checkbox - vise mogucnosti odabira</h1><hr>

              <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

              <input type="checkbox" name="povrce[]" 
              <?php if(in_array('kupus',$povrce)):?>
              checked="checked"
              <?php endif;?>
              id="kupus" value="kupus">
              <label for="kupus">Kupus</label>

              <input type="checkbox" name="povrce[]" 
              <?php if(in_array('mrkva',$povrce)):?>
              checked="checked"
              <?php endif;?>
              id="mrkva" value="mrkva">
              <label for="mrkva">Mrkva</label>

              <input type="checkbox" name="povrce[]" 
              <?php if(in_array('krompir',$povrce)):?>
              checked="checked"
              <?php endif;?>
              id="krompir" value="krompir">
              <label for="krompir">Krompir</label>

                
              <br>

              <?php $povrce ?>


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