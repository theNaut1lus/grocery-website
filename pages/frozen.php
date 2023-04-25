<?php include '../header.php'; ?>
<?php $id_pattern = '100' ?>
<?php include '../sql.php'; ?>
<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    <div class="list-group">
        <?php
        foreach ($product_array as $product) {
            // echo $product["product_id"];
            // echo "<br>";
            echo '
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between px-3">
                    <img src="../images/food.svg" alt="twbs" width="48" height="48" class="rounded-circle flex-shrink-0">
                    <div>
                        <h6 class="mb-0">' . $product["product_name"] . '</h6>
                        <p class="mb-0 opacity-25"> Inventory: ' . $product["in_stock"] . '</p>
                    </div>
                    <small class="opacity-50 text-nowrap"> AUD' . $product["unit_price"] . '</small>
                    <div>
                        <button class="btn btn-light rounded-pill px-3" type="button"><img src="../images/cart.svg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0"></button>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
</div>

<?php include '../footer.php'; ?>