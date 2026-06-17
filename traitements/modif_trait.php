<?php
include('../include/fonction.php');

echo $_POST['dep_choice'];
echo $_POST['date_modif'];
echo $_POST['id'];

var_dump($_POST);

if (empty($_POST['dep_choice'])) {

    header('Location: modif_dept.php?error=1');
}

