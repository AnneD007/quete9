<form action="includes/index.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="ville">ville :</label>
        <input type="text" id="ville" name="ville">
        <br><br>
    </div>
    <div>
        <label for="champion">Champion:</label>
        <input type="text" id="champion" name="champion">
        <br><br>
    </div>
    <div>
        <label for="type">Type :</label>
        <input id="text" name="type">
        <br><br>
    </div>
    <div>
        <label for="badge">Badge :</label>
        <input id="text" name="badge">
        <br><br>
    </div>
<div>Date de création
</div>
<div>Dernière modification
</div>

    <div class="inserer un champion">
      <label for="screenshot" class="form-label">Image du champion</label>
      <input type="file" class="form-control" id="screenshot" name="screenshot" />
      <br><br>
    </div>
    <div class="button">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>    
</form>