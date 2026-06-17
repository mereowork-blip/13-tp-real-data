<?php
include 'include/fonction.php';
$dep_list = liste_departement();
$id = $_GET['emp_no'];
$dep_tab = dep_emp_info($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtre et recherche</title>
</head>

<body>

    <table border="1px" class="table">
        <thead class="table-dark">
            <tr>
                <th>Numero departement</th>
                <th>Nom du departement</th>
                <th>Date du début</th>
            </tr>
        </thead>

        <?php foreach ($dep_tab as $dep) { ?>
            <tr>
                <td><?php echo $dep["dept_no"]; ?></td>
                <td><?php echo $dep["Nom_du_departement"]; ?></td>
                <td><?php echo $dep["date_de_debut"]; ?></td>
            <?php } ?>
    </table>

    <br><br>

    <form class="recherche-form" action="traitements/modif_trait.php" method="post">
        <div class="recherche-block">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label for="departement_list">Departments</label>
            <select name="dep_choice" id="departments_option">
                <option value="">--choisir--</option>
                <?php foreach ($dep_list as $dep) { ?>
                    <option value="<?= $dep["dept_no"] ?>"><?= $dep["dept_name"] ?></option>
                <?php } ?>
            </select>

            <label for="modif_date">Date de debut</label>
            <input type="text" name="date_modif" placeholder="YYYY-MM-DD" required>

        </div>

        <button type="submit" class="bouton-recherche">Recherche</button>
    </form>

</body>

</html>