<?php


function all(){
    // Fonction pour obtenir tous les utilisateurs
        require_once('./app/core/models/userModel.php');
        $results = findAllUsers();
    // Inclure la vue pour afficher les utilisateurs
        require_once('./app/core/views/user/all.php');
    }


function updateOne(){
        require_once('./app/core/models/userModel.php');
        // Mise à jour d'un utilisateur avec les données en POST
        updateFirst($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pwd'], $_POST['userID']);
    }


function userUpdateForm(){

    // Obtenir un utilisateur avec son ID pour afficher le formulaire de MAJ
        require_once('./app/core/models/userModel.php');
        $user = findUserBy($_POST['updateID']);
        require_once('./app/core/views/user/update.php');
  
    }


function deleteUser(){

    // Supprime un utilisateur via son ID
        require_once('./app/core/models/userModel.php');
        deleteUserBy($_POST["deleteID"]);

    }

function userAdd(){
        
        require_once('./app/core/models/userModel.php');

        // Récupère les données via méthode POST et l'ajoute comme nouvel utilisateur
        $nom = ($_POST["nom"]);
        $prenom = ($_POST["prenom"]);
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
    
        addOneUser($nom, $prenom, $email, $pwd);
        
    }

function userAddForm(){

            require_once('./app/core/views/user/add.php');

        }
    ?>