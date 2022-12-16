<?php
include "./includes/head.php";
include "./includes/function.php";
include "./includes/search.php";
if (!isset($_SESSION['uname'])) {
    header('location:./login');
}
$users = getAllUsers($db);

?>
<p class="text-light fst-italic">Manage Students</p>
<?php 
if (!isset($_SESSION['adname'])) {
    header('location:./');
} else {
    foreach ($users as $u) {
?>

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4 bg-dark">
            <div class="card-body text-center" style="height: 342px;">
                <img src="./avatar.png" alt="avatar" class="rounded-circle mt-3 img-fluid" style="width: 150px;">
                <h5 class="my-3 text-light text-uppercase">
                    <?= $u['name'] ?>
                </h5>
                <p class=" text-muted mb-1">Student</p>
                <p class="text-muted mb-4">Assam Down Town University</p>
            </div>
        </div>
        <div class="card mb-4 bg-dark">
            <a href="./includes/remove.php?id=<?=$u['id']?>" class="btn btn-dark shadow-none">Delete</a>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card mb-4 bg-dark text-light">
            <?php
        include "./includes/details.php";
            ?>

        </div>
        <div class="card mb-4 bg-dark">
            <a href="updatebyadmin?id=<?=$u['id']?>" class="btn btn-dark shadow-none">Edit Details</a>
        </div>

    </div>
</div>
<?php
    }
}
?>
</div>
</section>
<?php
include "./includes/footer.php"
    ?>