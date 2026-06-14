<?php
include 'include/fonction.php';

if (empty( $_POST["dep_choice"]) && empty($_POST["name"]) && empty($_POST["age_min"]) && empty($_POST["age_max"])) {
    header('Location: recherche.php?error=no_input');
    exit();
} else {
$dep = $_POST["dep_choice"];
$name = $_POST["name"];
$age_min = $_POST["age_min"];
$age_max = $_POST["age_max"];

if (!empty($age_min)) {
    $date_min = 2026 - $age_min;
};

if (!empty($age_max)) {
    $date_max = 2026 - $age_max;
};

$tab_res = get_info_by($dep, $name, $date_min, $date_max);

// var_dump ($tab_res);

}
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
        <h1 class="text-center">Resultat de la recherche</h1>

        <table class="table" border="1">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom(s)</th>
                    <th>Date de naissance</th>
                    <th>Département</th>
                </tr>
            </thead>
            <?php foreach ($tab_res as $res) { ?>
                <tr>
                    <td><a href="employes_details.php?emp_no=<?php echo $res["emp_no"];?>"><?php echo $res["emp_no"] ;?></a></td>
                    <td><?php echo $res["last_name"];?></td>
                    <td><?php echo $res['first_name'] ?></td>
                    <td><?php echo $res['birth_date'] ?></td>
                    <td><?php echo $res['dept_name'] ?></td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>