<?php include ROOT_DIR . '/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php'; ?>
<title>Product - ABC_SHOP</title>

<main class="page product-page" style="padding-top: 5rem;">
    <section class="clean-block clean-product dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Product Page</h2>
            </div>
            <div class="block-content">
                <!-- thong tin so luoc san pham -->

                <div class="product-info">
                    <div class="row">

                        <!-- phan anh -->
                        <div class="col-md-6">
                            <div class="gallery">
                                <div class="sp-wrap">
                                    <a href="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                        <img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                    </a>
                                    <a href="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                        <img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                    </a>
                                    <a href="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                        <img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL . '/uploads/' . $product_image ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- phan anh -->

                        <!-- phan thong tin -->
                        <div class="col-md-6">

                            <div class="info">

                                <h2> <?php echo $product['p_name'] ?></h2>
                                <div class="price" style="padding-left:10px">
                                    <h3> <?php echo $price ?> $ </h3>
                                </div>

                                <a href="<?php echo BASE_URL.'/add-cart/'.TienIch::vn_to_str($product['p_name']).'-'.$product['p_id'] ?>">

                                    <button class="btn btn-primary" type="button"><i class="icon-basket"></i>Add to Cart</button>
                                </a>
                                <div class="summary">
                                    <p>
                                        <?php echo $product['p_description'] ?>

                                    </p>
                                </div>

                            </div>

                            <!-- phan thong tin -->

                            <!-- phan thong tin -->


                        </div>
                    </div>


                </div>
            </div>
    </section>
</main>
<?php include './src/views/user/footer.php'; ?>