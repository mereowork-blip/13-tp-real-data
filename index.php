<?php include 'include/fonction.php';
// $departements = liste_departement();
$departements = depart_add();
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
        <h1 class="text-center">Liste des departements</h1>

        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>Department Numero</th>
                    <th>Department Name</th>
                    <th>Nom manager(s)</th>
                </tr>
            </thead>
            <?php foreach ($departements as $departement) { ?>
                <tr>

                    <td><a href="employes.php?choix=<?php echo $departement['Department_no']; ?>"><?php echo $departement['Department_no'] ?></td>
                    <td><?php echo $departement['Departement_name'] ?></td>
                    <td><?php echo $departement['Manager_name'] ?></td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>