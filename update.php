<?php
include "./includes/head.php";
include "./includes/function.php";
if (!isset($_SESSION['uname'])) {
    header('location:./login');
}
$u = getUser($db);
?>
<?php
include "./includes/search.php";
?>

<div class="row">
    <div class="col-lg-4">
        <div class="card mb-4 bg-dark">
            <div class="card-body text-center" style="height: 425px;">
                <img src="avatar.png" alt="avatar" class="rounded-circle img-fluid mb-4 mt-3" style="width: 180px;">
                <h5 class="my-3 text-light text-uppercase">
                    <?= $u['name'] ?>
                </h5>
                <p class=" text-muted mb-1">Student</p>
                <p class="text-muted mb-4">Assam Down Town University</p>
            </div>
        </div>

        <div class="card mb-2 bg-dark">
            <a href="./logout.php" class="btn btn-dark shadow-none">Log Out</a>
        </div>
        <div class="card mb-2 bg-dark">
            <a href="./" class="btn btn-dark shadow-none">Go to Home</a>
        </div>
    </div>

    <div class="col-lg-8">
        <form action="./includes/edit.php" method="POST">
            <div class="card mb-4 bg-dark text-light">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" name="name" maxlength="120" type="text"
                                value="<?= $u['name'] ?>" required>
                            <input class="form-control" name="id" maxlength="120" type="hidden" value="<?=
                                $u['id'] ?>" required>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Enrollment ID</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" name="eno" maxlength="120" type="text" required
                                value="<?= $u['eno'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Branch</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" name="branch" maxlength="120" type="text" required
                                value="<?= $u['branch'] ?>" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" name="email" maxlength="120" type="email" required
                                value="<?= $u['email'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" name="phone" maxlength="10" required
                                value="<?= $u['phone'] ?>">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control" name="address" maxlength="120" type="text" required
                                value="<?= $u['address'] ?>">

                        </div>
                    </div>

                </div>

            </div>

            <div class="card mb-2  bg-dark">
                <button type="submit" name="updateP" class="btn btn-dark shadow-none">Save changes</a>
            </div>
            <div class="card mb-2 bg-dark">
                <a href="./" class="btn btn-dark shadow-none">Cancel</a>
            </div>

        </form>

    </div>
</div>
</div>
</section>
<?php
include "./includes/footer.php"
    ?>