
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

  <div class="row align-items-start">
    <div class="col align-self-start">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $bis?>">
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $von?>">
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">Retour</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $retour?>">
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">Mehrfahrtenkarte</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $mk?>">
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">1. Klasse</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $klasse?>">
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">Anzahl</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $anzahl?>">
    </div>
  </div>

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">Datum</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $datum?>">
    </div>
  </div>

  <!-- Platz für Datenbestätigung -->

  <div class="row align-items-start">
    <div class="col align-self-start">
      <label class="col-sm-2 col-form-label">Preis</label>  
    </div>
    <div class="col align-self-center">
      <input type="text" readonly class="form-control-plaintext" value="<?php echo $preis?>">
    </div>
  </div>

  <div class="row">
      <input type="Submit" class="btn btn-primary btn-lg btn-block" value="Schiessen"/>
  </div>

</div>
