<?php
$pageUser = "Ajout d'un utilisateur";
?>
<!-- Affichage du titre principal -->
<h1>Ajout d'un utilisateur&nbsp;:</h1>


<!-- Formulaire d'ajout des utilisateurs -->
<form method="POST" action="index.php?controller=user&action=userAdd">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="pwd">
    <input type="submit" value="Envoyer">
</form>