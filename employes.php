<?php
include("include/fonction.php");
$id = $_GET['choix'];
$tab_emp = all_emp_per_dep($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employes d'un département</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="container col-12 col-md-8">

        <h1> Liste des employes du departement <?php echo $tab_emp[0]["departement"]; ?> :</h1>
        <table border="1px" class="table">
            <thead class="table-dark">
                <tr>
                    <th>Noms et prénoms</th>
                </tr>
            </thead>

        <?php foreach ($tab_emp as $emp) { ?>
        <tr>
            <td><a href="employes_details.php?emp_no=<?php echo $emp["id"];?>"><?php echo $emp["first_name"]; ?> <?php echo $emp["last_name"]; ?></a></td>
        </tr>
        <?php } ?>
        </table>
    </div>

</body>
</html>
