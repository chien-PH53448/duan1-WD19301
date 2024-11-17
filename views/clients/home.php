<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="container mt-5">
    <div>
        <img src="images/banner.jpg" alt="" width="100%">
    </div>

    <div class="row g-4">
        <?php foreach ($pets as $pet): ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img src="images/<?= $pet['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $pet['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price"><?= $pet['price'] ?></span>
                        </div>
                        <div class="product-buttons">
                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <br>
    <br>
    
    <h1>New Products</h1>
    <br>
    <br>
    <div class="row g-4">
        <?php foreach ($list_products as $pro) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img width="200px" src="images/<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $pro['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price"><?= $pro['price'] ?></span>

                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include_once ROOT_DIR . "views/clients/header.php" ?>