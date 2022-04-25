<?php

$list = 'SELECT * FROM champion';
$list1 = $db->prepare($list);
$list1 ->execute();
$listFetch = $list1->fetchAll();

foreach($listFetch as $listFinis){
?>

<div class="card" style="width: 18rem;">
  <img src="./img/poisson.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $listFinis['ville'];?> </h5>
    <p class="card-text"><?php echo $listFinis['champion'];?></p>
    <p class="card-text"><?php echo $listFinis['type'];?></p>
    <p class="card-text"><?php echo $listFinis['badge'];?></p>
    <p class="card-text"><?php echo $listFinis['crée le'];?></p>
    <p class="card-text"><?php echo $listFinis['modifié le'];?></p>
    <p class="card-text"><?php echo $listFinis['image du champion'];?></p>
       <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>