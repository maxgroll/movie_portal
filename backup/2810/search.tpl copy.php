<h2 class="title">Suche</h2>
<form action="index.php?action=show_search" method="post">
  <label for="search">Suche</label>
  <input type="text" id="search" name="search" onkeyup="showHint(this.value)"> <!--javascript funktion showHint wird aufgerufen sobald taste gedrückt wurde-->
</form>
<span id="txtHint"></span>