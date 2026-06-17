<?php
include("include/fonction.php");
$tab_emploi = emploi_add();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/index.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container col-12 col-md-8">
        <h1 class="text-center">Liste des emplois</h1>

        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>Nom de l'emploi</th>
                    <th>Nombre d'hommes</th>
                    <th>Nombre de femmes</th>
                    <th>Salaire moyen</th>
                </tr>
            </thead>
            <?php foreach ($tab_emploi as $emploi) { ?>
                <tr>
                    <td><?php echo $emploi['emploi'] ?></td>
                    <td><?php echo $emploi['nb_homme'] ?></td>
                    <td><?php echo $emploi['nb_femme'] ?></td>
                    <td><?php echo $emploi['salaire_moyen'] ?></td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>