<?php

include '../include/fonction.php';

if (empty( $_POST["dep_choice"]) && empty($_POST["name"]) && empty($_POST["age_min"]) && empty($_POST["age_max"])) {
    header('Location: ../recherche.php?error=no_input');
    exit();
} else {
    header('Location: ../resultat_recherche.php');
    exit();
}
