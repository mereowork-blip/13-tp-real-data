<?php include 'include/fonction.php';
$departements = liste_departement();
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
    <table class="content-table table table-dark table-bordered">
        <tr>
            <th>Department Numero</th>
            <th>Department Name</th>
        </tr>
        <?php foreach ($departements as $departement) { ?>
            <tr>

                <td><?php echo $departement['dept_no'] ?></td>
                <td><?php echo $departement['dept_name'] ?></td>
            <?php } ?>
            </tr>

</body>

</html>