<?php
// Array with names
$a[] = "Akureyri Hotel";
$a[] = "Dukes Hotel";
$a[] = "Pannonia Tower";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";


// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);

    // Conect to the database and search for the word
    $con = mysqli_connect('localhost','root','','hoteles');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"hoteles");
    $result = $con->query("SELECT nombre FROM hoteles WHERE nombre LIKE '$q%'");

    foreach($result as $name) {
        if (stristr($q, substr($name['nombre'], 0, strlen($q)))) {
            if ($hint === "") {
                $hint = $name['nombre'];
            } else {
                $hint .= ", ".$name['nombre']."";
            }
        }
    }

}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;


?>
