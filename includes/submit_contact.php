<!-- 
    inserer la fonction move_uploaded_file
    $_FILES['nom_du_champ']
    $_FILES['screenshot']
A vérifier et adapter voir le cours correspondant. -->
<!-- ---------------------debut de tests d'envoi de fichiers------------------------------------------------- -->
      
<!-- // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
// if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
// {
//         // Testons si le fichier n'est pas trop gros
//         if ($_FILES['screenshot']['size'] <= 1000000)
//         {
//                 // Testons si l'extension est autorisée
//                 $fileInfo = pathinfo($_FILES['screenshot']['name']);
//                 $extension = $fileInfo['extension'];
//                 $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
//                 if (in_array($extension, $allowedExtensions))
//                 {
//                         // On peut valider le fichier et le stocker définitivement
//                         move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . pokemon150($_FILES['screenshot']['name']));
//                         echo "L'envoi a bien été effectué !";
//                 }
//         }
// } -->
