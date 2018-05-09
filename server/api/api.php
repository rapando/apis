<?php

function conn() {
    return mysqli_connect("localhost","root", "", "api");
}

function fetch_people() {
    $qry = mysqli_query(conn(), "SELECT * FROM people");
    $data = array();
    while ($row = mysqli_fetch_assoc($qry)) {
        $data[] = $row;
    }

    return $data;
}

function fetch_person($id) {
    $qry = "SELECT * FROM people WHERE id = '$id'";
    $person = mysqli_query(conn(), $qry);
    if (mysqli_num_rows($person) == 0) {
        return false;
    }
    else {
        return mysqli_fetch_assoc($person);
    }
}

function create_user($name, $gender) {
    $qry = "INSERT INTO people VALUES (NULL, '$name', '$gender')";
    if (mysqli_query(conn(), $qry)) {
        return "yes";
    }
    else {
        return "no";
    }
}

?>
