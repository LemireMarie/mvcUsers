<?php 
    $pageUser = "Nos utilisateurs";
?>
<!-- Affichage du titre principal -->
<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>

<!-- Affichage du tableau pour afficher les utilisateurs renseignés -->
<table border=1>
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <!-- Boucle pour afficher les utilisateurs -->
            <?php foreach($results as $user){ ?>
                <tr>
                     <!-- Affichage des données de l'utilisateur -->
                    <td><?= $user["nom"]; ?></td>
                    <td><?= $user["prenom"]; ?></td>
                    <td><?= $user["email"]; ?></td>
                    <td>
                        <!-- Formulaire pour la mise à jour de l'utilisateur -->
                        <form method="POST" action="index.php?controller=user&action=userUpdateForm">
                            <input type="hidden" value="<?= $user["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
                        <!-- Formulaire pour la suppression de l'utilisateur -->
                        <form method="POST" action="index.php?controller=user&action=deleteUser">
                            <input type="hidden" value="<?= $user["id"]; ?>" name="deleteID">
                            <input type="submit" value="🗑️">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    
    <p><a href="index.php?controller=user&action=userAddForm" title="Ajouter un utilisateur">Ajouter un utilisateur</a></p>