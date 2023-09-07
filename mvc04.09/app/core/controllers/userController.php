<?php


function all(){
        require_once('./app/core/models/userModel.php');
        $results = findAllUsers();
        require_once('./app/core/views/user/all.php');
    }


function updateOne(){
        require_once('./app/core/models/userModel.php');
        // à vérifier
        updateFirst($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pwd'], $_POST['userID']);
    }


function userUpdateForm(){
        require_once('./app/core/models/userModel.php');
        $user = findUserBy($_POST['updateID']);
        require_once('./app/core/views/user/update.php');
  
    }


function deleteUser(){

        require_once('./app/core/models/userModel.php');
        deleteUserBy($_POST["deleteID"]);

    }

function userAdd(){
        
        require_once('./app/core/models/userModel.php');

        // a vérifer avec les bonnes variables
        $nom = ($_POST["nom"]);
        $prenom = ($_POST["prenom"]);
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
    
        addOneUser($nom, $prenom, $email, $pwd);
        
    }

function userAddForm(){

        require_once('./app/core/views/user/add.php');

        }
        
/** @todo function connection aux sessions */
function connect(){

    require_once('./app/core/views/user/connet.php');
}
    ?>