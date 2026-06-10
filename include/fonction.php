<?php
function connectBd()
{

    static $bdd = null;
    if ($bdd === null) {
        $bdd = mysqli_connect('localhost', 'root', '', 'employees');

        if (!$bdd) {
            die('Ereur de connexion');
        }
        mysqli_set_charset($bdd, 'utf8mb4');
    }
    return $bdd;
}


function liste_departement()
{
    $sql = "select * from departments";

    $query = mysqli_query(connectBd(), $sql);
    $result = array();
    while ($donnes = mysqli_fetch_assoc($query)) {
        $result[] = $donnes;
    }
    mysqli_free_result($query);
    return $result;
}
