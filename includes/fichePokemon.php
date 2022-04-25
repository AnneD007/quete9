<?php

$id = $_GET['id'];
$list = 'SELECT * FROM pokemon WHERE id = :id';
$list1 = $db->prepare($list);
$list1 ->execute([
    'id' => $id
]);

$listFetch = $list1->fetch();
?>


<div class='col'>
    <div class='card border-dark mb-3'>
        <img class='card-img-top image' src="img/imgPokemon/<?php echo $listFetch['image'];?>" style="width:200px;height:200px;">
        <div class='card-body'>
            <h5 class='card-title'><?php echo $listFetch['numero'] ?></h5>
            <h5><?php echo $listFetch['first_name'] ?></h5>
            <p><strong><?php echo $listFetch['type1'] ?></strong></p>
            <p><?php echo $listFetch['type2'] ?></p>
            <p></p>
            <p></p>
        </div>
        <a href="index.php?id=<?php echo $listFetch['id'] ?>&updatePokemon" class='btn btn-warning'>Modifier</a>
    </div>
</div>