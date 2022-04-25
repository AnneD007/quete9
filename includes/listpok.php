<?php

$list = 'SELECT * FROM pokemon';
$list1 = $db->prepare($list);
$list1 ->execute();
$listFetch = $list1->fetchAll();
?> 
<div class="row justify-content-center" style="margin:auto;">
<?php
foreach($listFetch as $listFinis){
?>
  <div class="card" style="">
    <img src="img/imgPokemon/<?php echo $listFinis['image'];?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $listFinis['numero'];?></h5>
      <p class="card-text"><?php echo $listFinis['first_name'];?></p>
      <p class="card-text"><?php echo $listFinis['type1'];?></p>
      <p class="card-text"><?php echo $listFinis['type2'];?></p>
      <p class="card-text"><?php echo $listFinis['created_at'];?></p>
      <p class="card-text"><?php echo $listFinis['modified_at'];?></p>    
      <a href="index.php?id=<?php echo $listFinis['id']; ?>&fichePokemon" class="btn btn-danger">modifier</a>
    </div>
  </div><?php } ?>
</div>