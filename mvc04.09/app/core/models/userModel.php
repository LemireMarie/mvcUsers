<?php
function findAllUsers(){
        // Récupération de la connexion à la base de données
        require_once('dbConnect.php');

        if($pdoConn){
            // Si la connexion à la base de donnée est effective :

            // Stockage de la requête SQL au sein de la variable $query.
            $query = "SELECT * FROM users";

            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){

                // Si la requête s'est exécutée sans accrocs :
                // Stockage de l'ensemble des résultats de la requête dans la variable $results
                $results = $execution->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $results;
    }

    function findUserBy(int $id){
        require_once('dbConnect.php');
        // Contrôle de l'état de la connexion à la base de données

        if($pdoConn){

            // Stockage de la requête SQL au sein de la variable $query.
            $query = "SELECT * FROM users WHERE id=$id";

            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){
                // Si la requête qui permet de récupérer les informations du livre souhaité s'est exécutée sans accrocs :
                // On stocke les données du livre dans une variable (utilisée ultérieurement pour être affichées dans les champs).
                $user = $execution->fetch(PDO::FETCH_ASSOC);
            }
            // Si la requête a rencontré une erreur lors de son execution
            else{
                header('Location: ../error.php');
            }
        }
        return $user;
    }

    function updateFirst($nom, $prenom, $email, $pwd, $id){
        require_once('dbConnect.php');
        
        // Contrôle de l'état de la connexion à la base de données
        if($pdoConn){

            // Stockage de la requête d'ajout au sein de la variable $query.
            $query = "UPDATE users SET nom='$nom', prenom='$prenom', email='$email', pwd='$pwd' WHERE id=$id";

            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){
                // Si la requête s'est exécutée sans accrocs :
                // Redirection vers la page qui affiche l'ensemble des livres
                header('Location: index.php?controller=user&action=all');
            }
            else{
                header('Location: ../error.php');
            }
        } // Fin du contrôle de la connexion à PDO
    }

    function deleteUserBy($id){
        require_once('dbConnect.php');

        // Contrôle de l'état de la connexion à la base de données
        if($pdoConn){

        
            // Stockage de la requête SQL au sein de la variable $query.
            $query = "DELETE FROM users WHERE id=$id";
            
            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){
                // Si la requête de suppression s'est exécutée sans accrocs :
                // Redirection vers la page sur laquelle figurent l'ensemble des livres
                header('Location: index.php?controller=user&action=all');
            }
            // Si la requête a rencontré une erreur lors de son execution
            else{
                header('Location: ../error.php');
            }
        } // Fin du contrôle de la connexion à PDO
        else{
            header('Location: ../error.php');
        }
    }

    function addOneUser($nom, $prenom, $email, $pwd){
        // Récupération de la connexion à la base de données
        require_once("dbConnect.php");
        // Si la connexion à la base de données est effective
        if($pdoConn){
            // Stockage de la requête d'ajout au sein de la variable $query.
            $query = "INSERT INTO users (nom, prenom, email, pwd) VALUES ('$nom', '$prenom', '$email', '$pwd')";

            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){
                // Si la requête s'est exécutée sans accrocs :
                // Redirection vers la page qui affiche l'ensemble des livres
                header('Location: index.php?controller=user&action=all');
            }
        }
    }
