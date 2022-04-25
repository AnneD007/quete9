<?php

$id = $_GET['id'];
$list = 'SELECT * FROM pokemon WHERE id = :id';
$list1 = $db->prepare($list);
$list1 ->execute([
    'id' => $id
]);

$listFetch = $list1->fetch();
?>

<form action="index.php?update" method="POST" enctype="multipart/form-data">
    <div>
        <label for="numero">Numero :</label>
        <input type="text" id="numero" name="numero" value="<?php echo $listFetch['numero'] ?>">
        <br><br>
    </div>
    <div>
        <label for="Nom">Nom :</label>
        <input type="text" id="df" name="pokemon" value="<?php echo $listFetch['first_name'] ?>">
        <br><br>
    </div>
    <div>
        <label for="type1">type1 :</label>
        <input type="text" name="type1" value="<?php echo $listFetch['type1'] ?>">
        <br><br>
    </div>
    <div>
        <label for="type2">type2 :</label>
        <input type="text" name="type2" value="<?php echo $listFetch['type2'] ?>">
        <br><br>
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo $listFetch['id'] ?>">
    </div>
    <div class="inserer un pokemon">
      <label for="screenshot" class="form-label">Image du pokemon</label>
      <input type="file" class="form-control" id="screenshot" name="image" />
      <br><br>
    </div>

    <div class="button">
        <button type="submit class="btn btn-danger" name="submitUpdate">Modifier</button>
    </div>    
</form>