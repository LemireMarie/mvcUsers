<?php


function all(){
        require_once('./app/core/models/userModel.php');
        $results = findAll();
        require_once('./app/core/views/user/all.php');
    }


function updateOne(){
        require_once('./app/core/models/userModel.php');
        // à vérifier
        update(htmlentities($_POST['nom']), htmlentities($_POST['description']), $_POST['prix'], $_POST['userID']);
    }


function showUpdateForm(){
        require_once('./app/core/models/userModel.php');
        $book = findBy($_POST['updateID']);
        require_once('./app/core/views/user/update.php');
  
    }


function delete(){

        require_once('./app/core/models/userModel.php');
        deleteBy($_POST["deleteID"]);

    }

function add(){
        
        require_once('./app/core/models/userModel.php');

        // a vérifer avec les bonnes variables
        $titre = htmlentities($_POST["titre"]);
        $desc = htmlentities($_POST["description"]);
        $prix = $_POST["prix"];
    
        addOne($titre, $desc, $prix);
        
    }

function showAddForm(){

            require_once('./app/core/views/user/add.php');

        }
    ?>