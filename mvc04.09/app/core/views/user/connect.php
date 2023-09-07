<?php
$pageUser = "Page de connexion";
?>

<h2>Formulaire de connexion :</h2>
<!--ACTION à modifier -->
<form action="index.php?controller=user&action=connect" method="POST">
    <p>
        <label for="email">Votre email</label>
        <input type="email" name="email" id="email" placeholder="votre email">
    </p>
    <p>
        <label for="pwd">Votre mot de passe</label>
        <input type="password" name="pwd" id="pwd" placeholder="votre mot de passe">
    </p>
    <button type="submit">Se connecter</button>
</form>