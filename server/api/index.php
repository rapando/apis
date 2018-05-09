<?php
require_once "api.php";

// if (isset($_GET['request'])) {
//     switch($_GET['request']) {
//         case 'fetch-people':
//             $people = fetch_people();
//             echo json_encode($people);
//         break;

//         case 'fetch-person':
//             $person = fetch_person($_GET['id']);
//             echo json_encode($person);
//         break;
//     }
// }


if (isset($_POST['request'])) {
    switch($_POST['request']) {
        case 'create-person':
            $name = $_POST['name'];
            $gender = $_POST['jinsia'];
            echo json_encode(create_person($name, $gender));
        break;

        
        }
 }





// "10.42.0.41/api"

// "knerd
// knerds.io
// 192.168.137.1/api
// "