<?php 
    // Si l'accès à cette page résulte de la transmission d'un formulaire via POST et qu'il contient un champ non vide dont le name vaut "deleteID".
    
        
        // Stocke l'ID du livre à supprimer dans une variable
        
        //cette variable n'est plus utile car on l'a déjà injecté dans la fonction
        $bookID = $_POST["deleteID"];


        

        // Si l'accès à la page ne s'est pas faite suite à l'envoi d'un formulaire transmis par méthode POST
        // ou bien qu'il ne contient pas un champ "deleteID" renseigné.
    

?>