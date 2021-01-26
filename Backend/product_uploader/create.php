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
            <form action="add.php" method="post">

                <div style="text-align:center;">
                    <h2 style="text-transform: capitalize;">Product upload here</h2>
                </div>
                <div class="row g-3">
                    <div class="col-4">
                        <label for="formFile" class="form-label">Barcode</label>
                        <input type="number" name="barcode" id="barcode" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="formFile" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                </div>
                <div class="row g-3">
                    <div class="col-6">
                        <label for="formFile" class="form-label">Quantity</label>
                        <input type="number" name="qty" id="qty" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="formFile" class="form-label">Price </label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Place your image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="7"></textarea>
                </div>

                <div class="d-grid gap-2 pd-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Upload Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Form End Here -->



<?php include("premade/footer.php");
?>