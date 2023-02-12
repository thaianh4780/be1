<title>Shopping Cart - ABC_SHOP</title>
<?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>
<main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <?php
                                foreach ($products as $product) {
                                ?>
                                    <div class="product">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-md-3">
                                                <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo BASE_URL . '/uploads/' . $product['p_image'] ?>"></div>
                                            </div>
                                            <div class="col-md-3 product-info"><a class="product-name" href="<?php echo BASE_URL . '/san-pham/'. TienIch::vn_to_str($product ['p_name'] ).'-' .$product['p_id'] ?>"><?php echo $product['p_name'] ?></a>

                                            </div>
                                            <div class="col-6 col-md-4 price"><span><?php echo number_format($product['p_price'] * (100 - $product['sale']) / 100, 0, '', ','); ?>$</span></div>
                                            <div class="col-md-1">
                                                <a class="btn btn-danger" href="<?php echo BASE_URL . '/remove-cart-item/' . $product['p_id'] ?>"><span>x</span></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <h4><span class="text">Total</span><span class="price"><?php echo number_format($total, 0, '', ',') ?>$</span></h4>
                                
                                <a href="<?php echo BASE_URL . '/thanh-toan' ?>">
                                <button style="margin-top:30px" class="btn-g12" type="button">Payment</button> 
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include ROOT_DIR.'/src/views/user/footer.php'; ?>