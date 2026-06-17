<?php
include('../include/fonction.php');

$dep = $_POST['dep_choice'];
$date = $_POST['date_modif'];
$id = $_POST['id'];

if (empty($_POST['dep_choice'])) {
    header('Location: modif_dept.php?error=1');
}

else {
    modif_dept ($id , $dep , $date);
    header('Location:../index.php?success=1');
}

