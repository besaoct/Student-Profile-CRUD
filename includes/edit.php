<?php

//profileEdit
require("../db.php");
if (isset($_POST['updateP'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $eno = $_POST['eno'];
    $address = $_POST['address'];

    $query = "UPDATE student SET name='$name', email='$email', phone='$phone',branch='$branch',eno='$eno',address='$address'  WHERE email='" . $_SESSION['email'] . "'";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        $_SESSION['email'] = $email;
        $_SESSION['uname'] = $name;
        echo '<script> alert("Data Updated"); </script>';
        header("Location:../");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else
    echo '<script> alert("Data Not Updated"); </script>';
    //admin updates users
if (isset($_POST['updateAP'])) {

    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $eno = $_POST['eno'];
    $address = $_POST['address'];

    $query = "UPDATE student SET name='$name', email='$email', phone='$phone',branch='$branch',eno='$eno',address='$address'  WHERE  id = '$id'";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:../");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else
    echo '<script> alert("Data Not Updated"); </script>';
?>