

<?php
include("sidebar.php");
include("header.php");
include("db_connect.php");

$q=mysqli_query($conn,"SELECT MAX(catId) AS catId from category");
$data=mysqli_fetch_array($q);
$catid=$data['catId']+1;
?>
<div class="main">
<div class="container-fluid mt-3">
<div class="card">
<div class="card-header bg-success text-white">Category Registration</div>
<div class="card-body">
    <form action="category.php" method="post">
    <label  class="form-label">Category Id :</label>
    <input type="text" name="catId" id="" class="form-control" readonly value="<?php echo $catid; ?>">
    <label  class="form-label">Category Name :</label>
    <input type="text" name="catName" id="" class="form-control">
    <a href="catVeiw.php" class="btn btn-danger mt-2 btn-sm" style="float:right;">Veiw record</a>
    <input type="submit" name="btn_save" value="Save Category" class="btn btn-primary mt-2 btn-sm mr-2" style="float:right;">
    </form>
    <?php
     if(isset($_POST['btn_save'])){
        $catname=$_POST['catName'];
        $query=mysqli_query($conn,"INSERT INTO category VALUES(NULL,'$catname',NULL)");
        echo "<div class='alert alert-success mt-5'><b>".$catname."</b> has been created</div>";
     };
     ?>
</div>
</div>
</div>
</div>
