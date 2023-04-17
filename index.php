<?php include 'header.php'; ?>
<?php $id_pattern = '' ?>
<?php include 'sql.php'; ?>
<?php //include 'sidebar.php'; ?>
<div class="col-8 d-flex flex-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    <div class="list-group list-group-horizontal flex-wrap">
        <h4 class="display-4 page-headings">All products</h4>
        <?php
        foreach ($product_array as $product) {
            // echo $product["product_id"];
            // echo "<br>";
            echo '
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true" onclick="check(this)">
            <small style="display:none">' . $product["product_id"] . '</small>
            <small style="display:none">' . $product["product_name"] . '</small>
            <small style="display:none">' . $product["unit_price"] . '</small>
            <small style="display:none">' . $product["unit_quantity"] . '</small>
            <small style="display:none">' . $product["in_stock"] . '</small>
                <div class="d-flex gap-2 w-100 justify-content-between px-3">
                    <img src="./images/food.svg" alt="twbs" width="48" height="48" class="rounded-circle flex-shrink-0">
                    <div>
                        <h6 class="mb-0">' . $product["product_name"] . '</h6>
                        <p class="mb-0 opacity-25"> Inventory: ' . $product["in_stock"] . '</p>
                    </div>
                    <small class="opacity-50 text-nowrap"> AUD' . $product["unit_price"] . '</small>
                    <div>
                        <button class="btn btn-light rounded-pill px-3" type="button"><img src="./images/cart.svg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0"></button>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
</div>
<?php include 'preview.php'; ?>
<div class="row">
    <div class="col-9">
        <h3 class="display-3">All products</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">In Stock</th>
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
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>