<?php

?>



<div style="display: flexbox; width:100%">
    <div style="width:50%">
      <a>Von</a>
      <ul class="list-group">
        <li class="list-group-item">Frauenfeld</li>
        <li class="list-group-item">Weinfelden</li>
        <li class="list-group-item">Zürich</li>
        <li class="list-group-item">Felben-Wellhausen</li>
        <li class="list-group-item">Hüttlingen</li>
        <li class="list-group-item">Bern</li>
        <li class="list-group-item">Basel</li>
        <li class="list-group-item">Genf</li>
        <li class="list-group-item">Luzern</li>
        <li class="list-group-item">Locarno</li>
      </ul>
    </div>
    <div style="width:50%">
      <a>Bis</a>
      <ul class="list-group">
        <li class="list-group-item">Frauenfeld</li>
        <li class="list-group-item">Weinfelden</li>
        <li class="list-group-item">Zürich</li>
        <li class="list-group-item">Felben-Wellhausen</li>
        <li class="list-group-item">Hüttlingen</li>
        <li class="list-group-item">Bern</li>
        <li class="list-group-item">Basel</li>
        <li class="list-group-item">Genf</li>
        <li class="list-group-item">Luzern</li>
        <li class="list-group-item">Locarno</li>
      </ul>
    </div>
    <form action="../Uebersicht/" method="post">
      <input type = "hidden" name = "von" value = "nig" />
      <input type = "hidden" name = "bis" value = "ger" />
      Retour: <input type="text" name="retour" /><br />
      Mehrfahrtenkarte: <input type="text" name="mk" /><br />
      Datum: <input type="text" name="datum" /><br />
      <input type="Submit" value="Absenden" />
    </form>
  </div>