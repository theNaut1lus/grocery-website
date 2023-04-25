<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="shortcut icon" href="/IP/images/sales.gif" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="/IP/style.css">
</head>

<body>

    <header class="p-3 mb-3 border-bottom shadow">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="." class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img src="/IP/images/sales.gif" width="48" height="48" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/IP/" class="nav-link px-2 link-secondary">Home</a></li>
                    <li>
                        <div class="dropdown text-end">
                            <a href="#"
                                class="nav-link px-2 link-body-emphasis d-block link-dark text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li>
                                    <a class="dropdown-item" href="/IP/pages/frozen.php">
                                        Frozen Food &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/frozen.php">Meat</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/frozen.php">Ice Cream</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/IP/pages/fresh.php">
                                        Fresh Food &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/fresh.php">Cheese</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/fresh.php">Meat</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/fresh.php">Fruit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/IP/pages/bevs.php">
                                        Beverges &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/bevs.php">Tea</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/bevs.php">Coffee</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/bevs.php">Choco</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/IP/pages/health.php">
                                        Home Health &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/health.php">Medicines</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/health.php">Kitchen</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/health.php">Washroom</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/IP/pages/pet.php">
                                        Pet Food &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/pet.php">Cat</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/pet.php">Dog</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/IP/pages/pet.php">Other</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/IP">All Products</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="/IP/search.php"
                    method="POST">
                    <input type="search" class="form-control" placeholder="Search..." name="search_pattern"
                        id="search_pattern" aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="notification-number">
                            <?php echo $notification_number; ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="/IP/cart-popout.php" target="popup" onclick='window.open("/IP/cart-popout.php","popup","width=600,height=600");
                            return false;'>
                                Cart
                            </a></li>
                        <li><a class="dropdown-item" href="/IP/checkout_now.php">Checkout</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">