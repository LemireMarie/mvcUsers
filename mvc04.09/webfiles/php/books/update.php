<?php 


// Si l'accès à cette page résulte de la transmission d'un formulaire via POST et qu'il contient un champ non vide dont le name vaut "deleteID".
if($_POST && isset($_POST["updateID"])){
    // Stocke l'ID du livre à supprimer dans une variable
    $bookID = $_POST["updateID"];
    


        // Si l'accès à la page ne s'est pas faite suite à l'envoi d'un formulaire transmis par méthode POST
        // ou bien qu'il ne contient pas un champ "updateID" renseigné.
    }
    else{
        header('Location: ../error.php');
    }
?>

<!-- Si la requête a retourné un résultat (on affiche le formulaire d'édition avec les données pré-renseignées)-->
<?php if($book){ ?>
    <!-- Charger la vue update.php si on dispose bien d'un livre 
         Le cas contraire charger la vue error.php
    -->
<?php } ?>

<?php 
    // Traitement du formulaire de modification //
    
    // Si l'accès à cette page résulte de la transmission d'un formulaire via POST et qu'il contient un champ non vide dont le name vaut "submitted".
    if($_POST && isset($_POST["submitted"])){

        // On devrait logiquement contrôler l'intégrité des données mais... (ce sera à vous de le faire).

        // Stockage des données issues du formulaire sous forme de variables individuelles 
        $titre = htmlentities($_POST["titre"]);
        $desc = htmlentities($_POST["description"]);
        $prix = $_POST["prix"];
        $id = $_POST["bookID"];
    

    } // Fin du contrôle de l'envoi du formulaire de modification (existance du champ submitted)
?>