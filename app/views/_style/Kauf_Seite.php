<?php
  $von = $data['von'];
  $bis = $data['bis'];
?>

<!-- style="display: flexbox; width:100%" -->

<div>
  <form action="../Uebersicht/" method="post">

    <input type = "hidden" name = "von" value = "<?php echo $von?>"  />
    <input type = "hidden" name = "bis" value = "<?php echo $bis?>" />

    <div class="form-group row">
      <div class="form-check">
        <input class="form-check-input form-control-lg" type="checkbox" name="retour">
        <label class="form-check-label form-control-lg" for="retourCheck">
          Retour (Hin ist Standart)
        </label>
      </div>
    </div>
    
    <div class="form-group row">
      <div class="form-check">
        <input class="form-check-input form-control-lg" type="checkbox" name="mk">
        <label class="form-check-label form-control-lg" for="mkCheck">
          Mehrfahrtenkarte
        </label>
      </div>
    </div>

    <div class="form-group row">
      <div class="form-check">
        <input class="form-check-input form-control-lg" type="checkbox" name="klasse">
        <label class="form-check-label form-control-lg" for="klasseCheck">
          1. Klasse (2. ist standart)
        </label>
      </div>
    </div>

    <div class="form-group form-control-lg">
        <label for="Anzahl">Anzahl Personen</label>
        <select class="form-control" name="anzahl">
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

    <div class="form-group row">
      <label for="example-date-input" class="col-2 col-form-label">Date</label>
      <div class="col-10">
        <input class="form-control form-control-lg" type="date" name="datum" value="">
      </div>
    </div>

    <input type="Submit" class="btn btn-primary btn-lg btn-block" value="Weiter" />
  </form>
</div>