<?php
include 'setting/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "includes/header.php";
    include "includes/carroussel.php";


    if (isset($_GET['list'])){
        include 'includes/listpok.php';
    }
    if (isset($_GET['addPokemon'])){
        include 'includes/formpok.php';
    }
    if (isset($_GET['add'])){
        include 'includes/traitement.php';
    }
    if (isset($_GET['fichePokemon'])){
        include 'includes/fichePokemon.php';
    }
    if (isset($_GET['updatePokemon'])){
        include 'includes/formUpdatePokemon.php';
    }
    if (isset($_GET['update'])){
        include 'includes/traitement.php';
    }

include "includes/footer.php";
?>

</body>
</html>