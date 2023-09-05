<?php 
    $pageTitle = "Nos utilisateurs";
?>

<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>

<table border=1>
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <?php foreach($resultats as $user){ ?>
                <tr>
                    <td><?= $user["name"]; ?></td>
                    <td><?= $user["prenom"]; ?></td>
                    <td><?= $user["email"]; ?></td>
                    <td>
                        <form method="POST" action="index.php?controller=user&action=userUpdateForm">
                            <input type="hidden" value="<?= $user["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
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