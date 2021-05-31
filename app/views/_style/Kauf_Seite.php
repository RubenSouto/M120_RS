<?php
  $von = $data['von'];
  $bis = $data['bis'];
  $defaultDate = date('Y-m-d');
?>

<div class="container-fluid">
  
  <form action="../Uebersicht/" method="post">

    <input type = "hidden" name = "von" value = "<?php echo $von?>"  />
    <input type = "hidden" name = "bis" value = "<?php echo $bis?>" />

    <div class="row align-items-start">
      <div class="col align-self-start">
        <input class="form-check-input" type="checkbox" name="retour">
        <label class="form-control-lg">
          Retour (Hin ist Standart)
        </label>
      </div>
    </div>
    
    <div class="row align-items-start">
      <div class="col align-self-start">
        <input class="form-check-input" type="checkbox" name="mk">
        <label class="form-check-label form-control-lg">
          Mehrfahrtenkarte
        </label>
      </div>
    </div>

    <div class="row align-items-start">
      <div class="col align-self-start">
          <input class="form-check-input" type="checkbox" name="klasse">
          <label class="form-check-label form-control-lg">
          1. Klasse (2. ist standart)
          </label>
      </div>
    </div>

    <div class="form-control-lg row align-items-start">
        <label for="anzahl">Anzahl Personen</label>
        <select class="form-control form-control-lg" name="anzahl">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
    </div>

    <div class="form-control-lg row align-items-start">
        <label for="anzahl">Ermässigungen</label>
        <select class="form-control form-control-lg" name="erm">
          <option>Keine</option>
          <option>Halbtax</option>
          <option>Ticket ist für Kind unter 6 Jahren (fahren gratis)</option>
          <option>Ticket ist für Kind zwischen 6-16 Jahren (halber Preis)</option>
        </select>
    </div>

    <div class="row align-items-start form-control-lg">
      <label for="datum">Gültig ab/an</label>
      <input class="form-control form-control-lg" type="date" name="datum" value="<?php echo $defaultDate?>">
    </div>

    <div class="row">
      <input type="Submit" class="btn btn-primary btn-lg btn-block" value="Weiter"/>
    </div>
    
  </form>
</div>