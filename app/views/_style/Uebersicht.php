
<?php
  $von = $data['von'];
  $bis = $data['bis'];
  $retour = $data['retour'];
  $mk = $data['mk'];
  $datum = $data['datum'];
  $klasse = $data['klasse'];
  $anzahl = $data['anzahl'];
  $erm = $data['erm'];
  $preis = $data['preis'];
?>

<div class="container-fluid">

  <form action="http://localhost/M120_RS/public/Startseite">
    <div class="row justify-content-center border">
      <div class="col-4">
        <div class="input-group input-group-lg" >
          <span class="input-group-text">Verbindung:</span>
          <input type="text" class="form-control" value="<?php echo $von?>" readonly>
          <input type="text" class="form-control" value="<?php echo $bis?>" readonly>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Retour</span>
          <input type="text" class="form-control" value="<?php echo $retour?>" readonly>
        </div>
      </div>
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Mehrfahrtenkarte</span>
          <input type="text" class="form-control" value="<?php echo $mk?>" readonly>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">1. Klasse</span>
          <input type="text" class="form-control" value="<?php echo $klasse?>" readonly>
        </div>
      </div>
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Anzahl</span>
          <input type="text" class="form-control" value="<?php echo $anzahl?>" readonly>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Ermässigung</span>
          <input type="text" class="form-control" value="<?php echo $erm?>" readonly>
        </div>
      </div>
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Gültig ab/an</span>
          <input type="text" class="form-control" value="<?php echo $datum?>" readonly>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-4">
        <div class="input-group input-group-lg">
          <span class="input-group-text">Preis</span>
          <input type="text" class="form-control" value="<?php echo $preis?>" readonly>
        </div>
      </div>
    </div>

    <div class="row">
        <input type="Submit" class="btn btn-primary btn-lg btn-block" value="Kaufen"/>
    </div>
  </form>
</div>