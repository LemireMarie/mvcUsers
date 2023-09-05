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

            if($exec){

                // Si la requête s'est exécutée sans accrocs :
                // Stockage de l'ensemble des résultats de la requête dans la variable $results
                $resultats = $exec->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $resultats;
    }

    
    ?>