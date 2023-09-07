<?php
$pageTitle = "Notre bibliothèque";
?>

<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>

<table border=1>
    <thead>
        <th>Titre</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
        <?php foreach ($results as $book) { ?>
            <tr>
                <td><?= $book["name"]; ?></td>
                <td><?= $book["description"]; ?></td>
                <td><?= $book["price"]; ?></td>
                <?php

                        if(!empty($_COOKIE) && $_COOKIE["cookie"] === "connected"){
                            ?>
                <td>
                    <form method="POST" action="index.php?controller=book&action=showUpdateForm">
                        <input type="hidden" value="<?= $book["id"]; ?>" name="updateID">
                        <input type="submit" value="📝">
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php?controller=book&action=delete">
                        <input type="hidden" value="<?= $book["id"]; ?>" name="deleteID">
                        <input type="submit" value="🗑️">
                    </form>
                </td>
                <?php
                        }
                        ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p><a href="index.php?controller=book&action=showAddForm" title="Ajouter un livre à notre bibliotheque">Ajouter un livre</a></p>