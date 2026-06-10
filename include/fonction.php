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

function get_one_line($sql)
{
    $query = mysqli_query(connectBd(), $sql);
    $result = mysqli_fetch_assoc($query);
    mysqli_free_result($query);
    return $result;
}
function get_all_lines($sql)
{
    $query = mysqli_query(connectBd(), $sql);
    $result = array();
    while ($donnes = mysqli_fetch_assoc($query)) {
        $result[] = $donnes;
    }
    mysqli_free_result($query);
    return $result;
}
function liste_departement()
{
    $sql = "SELECT * from departments ORDER BY dept_no ASC";
    $result = get_all_lines($sql);
    return $result;
}
function depart_add()
{
    $sql = "SELECT 
    departments.dept_no as Department_no,
    departments.dept_name as Departement_name,
    employees.first_name as Manager_name
    from departments
    join dept_manager on dept_manager.dept_no = departments.dept_no
    join employees on employees.emp_no = dept_manager.emp_no
    where dept_manager.to_date > '2000-01-01' order by employees.emp_no ASC;";



    $new_req = mysqli_query(ConnectBd(), $sql);
    $result = array();
    while ($donnes = mysqli_fetch_assoc($new_req)) {
        $result[] = $donnes;
    }
    mysqli_free_result($new_req);
    return $result;
}


function all_emp_per_dep($dep)
{
    $sql = "select 
    employees.first_name as first_name,
    employees.last_name as last_name,
    departments.dept_name as departement
    from departments
    join dept_emp on dept_emp.dept_no = departments.dept_no
    join employees on employees.emp_no = dept_emp.emp_no
    where dept_emp.dept_no ='$dep' LIMIT 10;";
    $new_req = mysqli_query(ConnectBd(), $sql);
    $result = array();
    while ($donnes = mysqli_fetch_assoc($new_req)) {
        $result[] = $donnes;
    }
    mysqli_free_result($new_req);
    return $result;
}
