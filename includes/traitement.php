<?php

if (isset($_POST['submitPokemon'])){

    $numero = $_POST['numero'];
    $pokemon = $_POST['pokemon'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $image = $_FILES['image']['name'];

    $sql =  'INSERT INTO `pokemon` (`numero`, `first_name`, `type1`, `type2` , `image`) VALUES (:numero, :firstname, :type1, :type2, :image)';
    $prepare1 = $db->prepare($sql);
    $prepare1->execute([
    'numero' => $numero,
    'firstname' => $pokemon,
    'type1' => $type1,
    'type2' => $type2,
    'image' => $image
    ]);

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        if ($_FILES['image']['size'] <= 1000000){
            $file = pathinfo($_FILES['image']['name']);
            $extension = $file['extension'];
            $extensionAccept = ['jpg','jpeg','png'];
            if (in_array($extension,$extensionAccept)){
                move_uploaded_file($_FILES['image']['tmp_name'], 'img/imgPokemon/' . basename($_FILES['image']['name']));
            }
        }
    }
}
if (isset($_POST['submitUpdate'])){

    $numero = $_POST['numero'];
    $pokemon = $_POST['pokemon'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $image = $_FILES['image']['name'];
    $id = $_POST['id'];

    $sql = 'UPDATE `pokemon` SET `numero` = :numero, `first_name` = :firstname, `type1` = :type1, `type2` = :type2 , `image` = :image1 WHERE id = :id';
    $prepare = $db->prepare($sql);
    $prepare->execute([
        'numero' => $numero,
        'firstname' => $pokemon,
        'type1' => $type1,
        'type2' => $type2,
        'image1' => $image,
        'id' => $id
    ]);

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        if ($_FILES['image']['size'] <= 1000000){
            $file = pathinfo($_FILES['image']['name']);
            $extension = $file['extension'];
            $extensionAccept = ['jpg','jpeg','png'];
            if (in_array($extension,$extensionAccept)){
                move_uploaded_file($_FILES['image']['tmp_name'], 'img/imgPokemon/' . basename($_FILES['image']['name']));
            }
        }
    }

}
?>