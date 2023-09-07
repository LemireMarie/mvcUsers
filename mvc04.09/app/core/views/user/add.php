<?php
session_start();
$pageUser = "Ajout d'un utilisateur";
if(!empty($_SESSION) && $_SESSION["connected"]){ 

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
<?php
}
else{
    header('Location: ./app/core/views/user/all.php');
}
?>