<?php 
include "./db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./avatar.png"
        type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Freehand&family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poor+Story&family=Silkscreen:wght@400;700&display=swap');

        .text-muted {
            color: rgb(172, 182, 198) !important;
        }

        input.form-control:focus,
        input.form-control::after {
            outline: none;
            box-shadow: none !important;
        }
    </style>
    <title>Student Profile</title>
</head>

<body style="font-family: 'Montserrat';background-color: rgb(24, 26, 28);width:98%;margin:auto">
 <section class="m-2 mt-4 rounded-1 logreg" style="background-color:rgb(48, 55, 67);">
        <div class="container py-5">