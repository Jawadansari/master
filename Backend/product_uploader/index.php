<?php
// database connection file
require("premade/db.php");

$sql = "SELECT * FROM products";
$result = $con->query($sql);

?>

<?php include("premade/header.php") ?>

<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-8 bg-dark">
            <h3 style="color: white;">Products</h3>
        </div>
        <div class="col-4 bg-dark">
            <a style="float: right;" href="create.php"><i class="btn btn-primary">+Add New</i></a>
        </div>
    </div>
    <div class="row">

        <?php if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-3 col-sm-6"><div class="product-grid"><div class="product-image"><a href="#"><img class="pic-1" src="
    ' . $row['image'] . '
    "></a><span class="product-new-label">Sale</span><span class="product-discount-label">20%</span></div><div class="product-content">
    <h3 class="title"><a href="#">
    ' . $row['name'] . '
    </a></h3><div class="price">
    ' . $row['price'] . '
    </div></div></div></div>';
            }
        }
        ?>

    </div>
</div>
<hr>


<!-- <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                            </a>
                            <span class="product-new-label">Sale</span>
                            <span class="product-discount-label">20%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">jawad</a></h3>
                            <div class="price"></div>
                        </div>
                    </div>
                </div> -->


<?php include("premade/footer.php") ?>