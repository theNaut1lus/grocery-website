<?php include 'header.php'; ?>
<?php $id_pattern = '' ?>
<?php include 'sql.php'; ?>
<?php //include 'sidebar.php'; ?>
<div class="col-12">
    <div class="row">
        <div class="col-8">
            <h1 class="display-4">Shopping Cart</h1>
        </div>
        <div class="col-4">
            <button class="btn btn-success">Checkout</button>
            <button class="btn btn-danger">Empty Cart</button>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">In Stock</th>
                <th scope="col">Quantity</th>
                <th scope="col">Update</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($product_array as $product) {
                echo '
                        <tr>
                            <td>' . $product["product_name"] . '</td>
                            <td>' . $product["unit_price"] . '</td>
                            <td>' . $product["in_stock"] . '</td>
                            <td><input class="form-control" type="number" value="1"></td>
                            <td><button class="btn btn-outline-primary">+</button></td>
                            <td><button class="btn btn-outline-danger">X</button></td>
                        </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>