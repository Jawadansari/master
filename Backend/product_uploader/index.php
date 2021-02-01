<?php
// database connection file
require("premade/db.php");

$sql_M = "SELECT * FROM products WHERE tag='mobile'";
$result_M = $con->query($sql_M);

$sql_W = "SELECT * FROM products WHERE tag='watch'";
$result_W = $con->query($sql_W);

$sql_L = "SELECT * FROM products WHERE tag='laptop'";
$result_L = $con->query($sql_L);

?>

<?php include("premade/header.php") ?>

<div class="container-fluid">
    <div class="row mt-3 mb-3 p-2 bg-primary">
        <div class="col-6 bg-primary">
            <h3 style="color: white;float: right;">Products</h3>
        </div>
        <div class="col-6 bg-primary">
            <a style="float: left;" href="create.php"><i class="btn btn-dark">+Add New</i></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center bg-dark">
                <h2 style="color: white;">Mobiles</h2>
            </div>
        </div>
        <div class="row">
            <?php if ($result_M->num_rows > 0) {
                // output data of each row
                while ($row = $result_M->fetch_assoc()) {
                    echo '<div class="col-md-3 col-sm-6 mt-2"><div class="product-grid"><a href="show.php?rowid=' . $row['id'] . '"><div class="product-image"><img class="pic-1" src="
    ' . $row['image'] . '
    "><span class="product-new-label">Sale</span><span class="product-discount-label">20%</span></div><div class="product-content">
    <h3 class="title">
    ' . $row['name'] . '
    </h3><div class="price">
    ' . $row['price'] . '
    </div></div></a></div></div>';
                }
            }
            ?>

        </div>

        <div class="row">
            <div class="col-12 text-center bg-dark mt-3">
                <h2 style="color: white;">Watch</h2>
            </div>
        </div>
        <div class="row">
            <?php if ($result_W->num_rows > 0) {
                // output data of each row
                while ($row = $result_W->fetch_assoc()) {
                    echo '<div class="col-md-3 col-sm-6 mt-2"><div class="product-grid"><a href="#"><div class="product-image"><a href="#"><img class="pic-1" src="
    ' . $row['image'] . '
    "></a><span class="product-new-label">Sale</span><span class="product-discount-label">20%</span></div><div class="product-content">
    <h3 class="title"><a href="#">
    ' . $row['name'] . '
    </a></h3><div class="price">
    ' . $row['price'] . '
    </div></div></a></div></div>';
                }
            }
            ?>

        </div>

        <div class="row">
            <div class="col-12 text-center bg-dark mt-3">
                <h2 style="color: white;">Laptop</h2>
            </div>
        </div>
        <div class="row">
            <?php if ($result_L->num_rows > 0) {
                // output data of each row
                while ($row = $result_L->fetch_assoc()) {
                    echo '<div class="col-md-3 col-sm-6 mt-2"><div class="product-grid"><a href="#"><div class="product-image"><a href="#"><img class="pic-1" src="
    ' . $row['image'] . '
    "></a><span class="product-new-label">Sale</span><span class="product-discount-label">20%</span></div><div class="product-content">
    <h3 class="title"><a href="#">
    ' . $row['name'] . '
    </a></h3><div class="price">
    ' . $row['price'] . '
    </div></div></a></div></div>';
                }
            }
            ?>

        </div>
    </div>
</div>
<hr>

<div class="container">
    
<div class="col-md-3 col-sm-6">
    <div class="product-grid">
        <a href="#">
            <div class="product-image">

                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">

                <span class="product-new-label">Sale</span>
                <span class="product-discount-label">20%</span>
            </div>
            <div class="product-content">
                <h3 class="title">jawad</h3>
                <div class="price"></div>
            </div>
        </a>
    </div>
</div>

</div>

<?php include("premade/footer.php") ?>