<?php
include "./includes/head.php";
include "./includes/function.php";
include "./includes/search.php";
if (!isset($_SESSION['uname'])) {
    header('location:./login');
}
if (!isset($_GET['q'])) {
    header('location:./');
}
$search = getAllUsers($db);
?>
    
<div>
    <p style="color: rgb(189, 219, 240); font-size:small" class="text-uppercase fst-italic">Search Results
    for: <?=$_GET['q']?>
    </p>
</div>
<?php
if (isset($_GET['q'])) {

    $data = mysqli_real_escape_string($db, $_GET["q"]);
    $sql = "SELECT * from student where name like '%$data%' or email like '%$data%'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($s = mysqli_fetch_assoc($result)) {
?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 bg-dark">
                        <div class="card-body text-center" style="height: 342px;">
                            <img src="./avatar.png"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3 text-light text-uppercase">Masud Shafin Ahmed</h5>
                            <p class=" text-muted mb-1">Student</p>
                            <p class="text-muted mb-4">Assam Down Town University</p>
                        </div>
                    </div>
               
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4 bg-dark text-light">
                   <?php
            include('./includes/searchdata.php');
                   ?>

                    </div>
             
                </div>
            </div>
            <?php
        }
    }else{

    ?>
    <div>
        <p class="text-light"> No data found !</p>
        <a href="./" class="text-light"> HOME</p>
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

 