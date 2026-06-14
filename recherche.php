<?php 
include 'include/fonction.php';
$dep_list = liste_departement();
if (!empty($_GET["error"])) {
    $mess = "Erreur, Veuillez entrer des données";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtre et recherche</title>
</head>
<body>
    <form class="recherche-form" action="resultat_recherche.php" method="post" >
        <div class="recherche-block">
            <label for="departement_list">Departments</label>
            <select name="dep_choice" id="departments_option">
                <option value="">--choisir--</option>
                <?php foreach ($dep_list as $dep ) { ?>
                <option value="<?= $dep["dept_no"] ?>"><?= $dep["dept_name"] ?></option>
                <?php } ?>
            </select>

            <label for="recherche_nom">Name</label>
            <input type="text" name="name" placeholder="Nom de l'employé">

            <label for="age_min">Age minimum</label>
            <input type="number" name="age_max" placeholder="Age minimum de l'employé">

            <label for="age_max">Age maximum</label>
            <input type="number" name="age_min" placeholder="Age maximum de l'employé">
        </div>

        <button type="submit" class="bouton-recherche">Recherche</button>
    </form>

    <?php if (!empty($mess)) { echo $mess ; } ?>
</body>
</html>