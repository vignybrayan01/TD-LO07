
<?php


function listeJoueur() {
$a="<form method='GET' action='td05_tournoi_form2.php'>
        <label for='nombre_joueurs'>Nombre de Joueurs (entre 2 et 5) :</label><br>
        <input type='number' id='nombre_joueurs' name='nombre_joueurs' min='2' max='5' required><br><br>
        <input type='submit' value='Valider'>
    </form>";
echo $a;
}

?>