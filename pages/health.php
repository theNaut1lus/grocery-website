<?php $id_pattern = '200' ?>
<?php include '../sql.php'; ?>
<?php include '../header.php'; ?>
<?php //include 'sidebar.php'; ?>
<div class="col-8 d-flex flex-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    <div class="list-group list-group-horizontal flex-wrap shadow">
        <h4 class="display-4 page-headings px-4">Home and Health</h4>
        <?php
        foreach ($product_array as $product) {
            // echo $product["product_id"];
            // echo "<br>";
            echo '
            <a href="#product-list" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true" onclick="check(this)">  
                <small style="display:none">' . $product["product_id"] . '</small>
                <small style="display:none">.' . $product["image_index"] . '</small>  
                <small style="display:none">' . $product["product_name"] . '</small>
                <small style="display:none">' . $product["unit_price"] . '</small>
                <small style="display:none">' . $product["unit_quantity"] . '</small>
                <small style="display:none">' . $product["in_stock"] . '</small>
                <div class="d-flex gap-2 w-100 justify-content-between px-3">
                    <img src="../' . $product["image_index"] . '" alt="twbs" width="60" height="60" class="flex-shrink-0">
                    <div>
                        <h6 class="mb-0">' . $product["product_name"] . '</h6>
                        <p class="mb-0 opacity-50">' . $product["unit_quantity"] . '</p>
                        <p class="mb-0 opacity-25">In stock</p>
                    </div>
                    <small class="opacity-50 text-nowrap"> AUD ' . $product["unit_price"] . '</small>
                    <div>
                        <button class="btn btn-light rounded-pill px-3" type="button"><img src="../images/cart.svg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0"></button>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
</div>
<?php include '../preview.php'; ?>
<?php include '../footer.php'; ?>