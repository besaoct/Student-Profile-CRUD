<?php
// get current user
function getUser($db)
{
    $result = mysqli_query($db, "select * from student where email ='" . $_SESSION['email'] . "'");
    $data = mysqli_fetch_assoc($result);
    return $data;
}
//get all users
function getAllUsers($db)
{
    $query = "SELECT * FROM student ORDER BY id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while ($d = mysqli_fetch_assoc($run)) {
        $data[] = $d;
    }
    return $data;
}
?>