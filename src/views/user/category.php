<!-- Trang danh mục -->
<?php include ROOT_DIR . '/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php'; ?>
<title>Category - ABC_SHOP</title>
<main class="page catalog-page">
    <section class="clean-block clean-catalog dark" style="margin-top: 50px;">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Danh mục</h2>

            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-none d-md-block">
                            <div class="filters">
                                <div class="filter-item">
                                    <h3>Danh mục</h3>
                                    <?php foreach ($categories as $category) { ?>
                                        <div>
                                            <a style="text-decoration: none" href="<?php echo BASE_URL . '/danh-muc/' . TienIch::vn_to_str($category['c_name']) . '-' . $category['c_id'] ?>"><?php echo $category["c_name"] ?>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="products" style="margin-left:20px;">
                            <div class="row no-gutters">
                                <!-- san pham o day  -->
                                <?php foreach ($products as $product) {  ?>
                                    <div class="col-12 col-md-6 col-lg-3" style="margin:5px 0;">
                                        <div class="clean-product-item">
                                            <div class="image" style="width :300px; height:200px; margin-left:-70px; ">
                                                <a href="<?php echo BASE_URL . '/san-pham/' . TienIch::vn_to_str($product['p_name']) . '-' . $product['p_id'] ?>"><img style="width:182px; height:200px; padding-left:-100px; " class="img-fluid d-block mx-auto" src="<?php echo BASE_URL . '/uploads/' . $product['p_image'] ?>"></a>
                                            </div>
                                            <div class="product-name"><?php echo $product["p_name"] ?></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3><?php echo $product["p_price"] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>



                            <?php include ROOT_DIR . "/src/views/user/pagination.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

<?php include ROOT_DIR . '/src/views/user/footer.php'; ?>