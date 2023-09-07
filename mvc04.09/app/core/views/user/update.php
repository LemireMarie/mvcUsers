<?php
session_start();
    $pageUser = "Modification d'un utilisateur";
    if(!empty($_SESSION) && $_SESSION["connected"]){ 
?>
<!-- Affichage du titre principal -->
<h1>Modification d'un utilisateur <?= $user["nom"] ?>&nbsp;:</h1>

<!-- Affichage du formulaire de MAJ -->
<form action="index.php?controller=user&action=updateOne" method="POST">
    <input type="text" name="nom" placeholder="Nom" value="<?= $user["nom"] ?>">
    <input type="text" name="prenom" placeholder="Nom" value="<?= $user["prenom"] ?>">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="pwd" placeholder="Mot de passe">
    <input type="hidden" value="<?= $user["id"]; ?>" name="userID">
    <input type="submit" value="Envoyer">
</form>
<?php
    }
else{
    header('Location: ./app/core/views/all.php');
}
?>