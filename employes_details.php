<?php
include("include/fonction.php");
$id = $_GET['emp_no'];
$emp_info = get_emp_info($id);
$H = "Homme";
$F = "Femme";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info concernant un employé</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="container col-12 col-md-8">

        <h1> Détails sur <?php echo $emp_info[0]["first_name"]; ?> <?php echo $emp_info[0]["last_name"]; ?> :</h1>
        <table border="1px" class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date de naissance</th>
                    <th>Prénoms</th>
                    <th>Noms</th>
                    <th>Gendre</th>
                    <th>Date d'embauche</th>
                </tr>
            </thead>

        <?php foreach ($emp_info as $info) { ?>
        <tr>
            <td><?php echo $info["emp_no"]; ?></td>
            <td><?php echo $info["birth_date"]; ?></td>
            <td><?php echo $info["first_name"]; ?></td>
            <td><?php echo $info["last_name"]; ?></td>
            <td><?php if ($info["gender"] == "M") { echo $H; } elseif ($info["gender"] == "F") { echo $F ;}; ?></td>
            <td><?php echo $info["hire_date"]; ?></td>
        </tr>
        <?php } ?>
        </table>
    </div>

</body>
</html>
