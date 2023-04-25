<?php include 'cart-select.php'; ?>

<?php include 'cart-update' ?>

<div class="col-md-4 col-lg-3">
    <div class="row">
        <div class="col-12">
            <h4 class="display-4 page-headings">Cart</h4>
        </div>
    </div>
    <div class="row">
        <table class="col-12 table table-striped table-hover cart-table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Unit Price</th>
                    <!-- <th scope="col">In Stock</th> -->
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($product_array as $product) {
                    echo '
                        <tr>
                            <td>' . $product["product_name"] . '</td>
                            <td>' . $product["unit_price"] . '</td>
                            <td><input class="form-control" type="number" value="' . $product["quantity"] . '"></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-6 align-items-center">
            <button class="btn btn-danger">Empty</button>
        </div>
        <div class="col-6 align-items-center">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</div>