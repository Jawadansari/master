<?php
// database connection file
require("premade/db.php");
// Adding header
include("premade/header.php")
?>

<!-- Form for product upload -->
<div class="containeer-fluid">
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
        <div class="container">
            <form action="" method="post">

                <div style="text-align:center;">
                    <h2 style="text-transform: capitalize;">Product upload here</h2>
                </div>
                <div class="row g-3 mb-2">
                    <div class="col-md-4 col-sm-12">
                        <label for="formFile" class="form-label">Barcode</label>
                        <input type="number" name="barcode" id="barcode" class="form-control">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <label for="formFile" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                </div>
                <div class="row g-3 mb-2">
                    <div class="col-md-6 col-sm-12">
                        <label for="formFile" class="form-label">Quantity</label>
                        <input type="number" name="qty" id="qty" class="form-control">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="formFile" class="form-label">Price </label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 col-sm-12">
                        <label for="formFile" class="form-label">Place your image</label>
                        <input class="form-control" type="text" placeholder="Image Url" name="image" id="image">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="formFile" class="form-label">Select Tags</label>
                        <select class="form-control" name="tag" aria-label="Default select example">
                            <option disabled selected>Open this select menu</option>
                            <option value="watch">Watch</option>
                            <option value="mobile">Mobile</option>
                            <option value="laptop">Laptop</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="7"></textarea>
                    </div>
                </div>

                <div class="d-grid gap-2 pd-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Upload Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Form End Here -->
<?php

// Sending product data to database
if (isset($_POST['barcode'], $_POST['name'], $_POST['price'], $_POST['qty'], $_POST['image'], $_POST['tag'], $_POST['description'])) {
    $barcode = $_POST['barcode'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $image = $_POST['image'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];

    if ($barcode == '' || $name == '' || $price == '' || $qty == '' || $image == '' || $tag == '' || $description == '') {
        echo "kashkdashkd";
    }else {
        $sql = "INSERT INTO `products` (`barcode`, `name`, `price`, `qty`, `image`, `tag`, `description`) VALUES ('$barcode', '$name', '$price', '$qty', '$image', '$tag', '$description');";
        
        if ($con->query($sql) === FALSE) {
            echo $con->error;
        }    
    }
}
// echo '</script>alert("")</script>'

?>


<?php include("premade/footer.php");
?>