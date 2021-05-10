<?php
  $von = isset($_POST['von']) ? $_POST['von']: "";
  $bis = isset($_POST['bis']) ? $_POST['bis']: "";
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
          Retour
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
      <label for="example-date-input" class="col-2 col-form-label">Date</label>
      <div class="col-10">
        <input class="form-control form-control-lg" type="date" name="datum">
      </div>
    </div>
    <!-- Retour: <input type="text" name="retour" /><br />
    Mehrfahrtenkarte: <input type="text" name="mk" /><br /> -->
    Datum: <input type="text" name="datum" /><br />
    <input type="Submit" value="Absenden" />
  </form>
</div>