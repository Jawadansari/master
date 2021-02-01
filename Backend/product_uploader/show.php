<?php 
require("premade/db.php");

$rowid = $_GET['id'] ? intval($_GET['id']): 0;
echo"$rowid";
$sql = "SELECT * FROM products WHERE id = $rowid";
$result = $con->query($sql);

$row = $result->fetch_assoc();
var_dump($row);

include("premade/header.php");
?>

<!-- <?php if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
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
            ?> -->

<div class="containeer-fluid">
    <div class="jumbotron jumbotron-fluid bg-dark text-white">

        <div class="container">
            <div class="row">
            <!-- Iproduct image -->
                <div class="preview col-md-6">
                    <div class="tab-content float-right">
                        <div class="tab-pane active" id="pic-1"><img style="width: 100%;" src="images/w3.jpg" /></div>
                    </div>
                </div>
                <!-- deatil starts here -->
                <div class="details col-md-6">
                    <h3 style="text-transform: capitalize;" class="product-title">men's shoes fashion</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked bg-dak"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                    </div>
                    <br>
                    <h4 class="price">Price: <span>$180</span></h4>

                    <h5 class="price">Quantity available: <span>180</span></h5>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    
                    
                    <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                    <div class="action">
                        <button class="add-to-cart btn btn-primary" type="button">add to cart</button>
                        <button class="like btn btn-primary" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("premade/footer.php");
?>