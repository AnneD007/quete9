<form action="index.php?add" method="POST" enctype="multipart/form-data">
    <div>
        <label for="numero">Numero :</label>
        <input type="text" id="numero" name="numero">
        <br><br>
    </div>
    <div>
        <label for="Nom">Nom :</label>
        <input type="text" id="df" name="pokemon">
        <br><br>
    </div>
    <div>
        <label for="type1">type1 :</label>
        <input type="text" name="type1">
        <br><br>
    </div>
    <div>
        <label for="type2">type2 :</label>
        <input type="text" name="type2">
        <br><br>
    </div>
    <div class="inserer un pokemon">
      <label for="screenshot" class="form-label">Image du pokemon</label>
      <input type="file" class="form-control" id="screenshot" name="image" />
      <br><br>
    </div>
    <div class="button">
        <button type="submit" class="btn btn-primary" name="submitPokemon">Envoyer</button>
    </div>    
</form>