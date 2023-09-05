<?php 

    // Initialisation d'un tableau d'erreurs (vide)
    $errors = [];

    // Si le formulaire a été transmis
    if($_POST){

        // Pour chaque champ du formulaire
        foreach($_POST as $field=>$value){

            // Si le champ est vide (y compris si il ne contient que des espaces)
            if(empty(trim($value))){
                $errors[$field] = $field." non renseigné(e)"; // Stocke l'erreur dans un tableau d'erreurs
            }
            else{

                /* if(...) / else {
                    On pourrait procéder à une vérification approfondie.
                    Ex : le nombre de caractères contenus dans le titre, de la description,
                    le type de données (si il s'agit bien de texte ou de chiffres, etc.)
                }*/
            }
        } // end foreach

        // Si le tableau d'erreurs contient autant d'éléments que le nombre de champs transmis via POST :
        if(sizeof($errors) === sizeof($_POST)){ ?>
            <h2>L'ensemble des champs comportent une ou plusieurs erreur(s).</h2>
        <?php }

        // Le cas contraire...
        else { 
            // On regarde si le tableau des erreurs contient quelque chose
            // Si c'est le cas, on affiche chaque erreur à l'utilisateur 
            if($errors){ ?>
            <ul>
                <?php foreach($errors as $error){ ?>
                    <li><?= $error; ?></li>
                <?php } // endforeach ?>
            </ul>
            <?php } // endif

            // Si le tableau d'erreurs est vide, alors cela signifie que le formulaire a été correctement rempli
            else{
                // Uniquement dans ce cas, il est possible de procéder à l'ajout en base de données.
                
                // Stockage des données issues du formulaire sous forme de variables individuelles 
                
                // Pour rappel : htmlentites permet aux phrases qui contiennent des apostrophes de tout de même être enregistrées.
                
                

               
            } // Fin de la condition (IF / ELSE) entre le tableau d'erreurs et $_POST ?>
        
    <?php } // fin du cas contraire... ?>

<?php } // Fin du contrôle de l'envoi du formulaire ?>

