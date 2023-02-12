<title>Home - ABC_SHOP</title>

<?php include ROOT_DIR . '/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php'; ?>

<main class="page landing-page" style="margin-top: 5rem;" >

    <!-- TAM THOI -->
  
    <!-- TAM THOI -->

    <!-- slider -->
    <section class="clean-block slider dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Mẫu Iphone mà ABC_SHOP Shop Hiện Có</h2>
            </div>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                
                    <!-- anh slider -->
                    <div class="carousel-item active">
                  
                    <img class="w-100 d-block" src="./uploads/12de2.jpg" alt="Slide Image">
                    </div>
                    <?php foreach ($sliders as $sliderItem) {       ?>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="<?php echo BASE_URL .'/uploads/' .$sliderItem['s_img'] ?>" alt="Slide Image">
                    </div>
                  
                    <?PHP  
                    }
                    ?>
                    
                    <!-- anh slider -->
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- slider -->


    <!-- sản phẩm đang hot -->
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Sản Phẩm Đang Hot</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products" style="margin-left:20px;">
                            <div class="row no-gutters">
                                <!-- san pham o day  -->
                                <?php foreach ($productList as $product) {  ?>
                                    <div class="col-12 col-md-6 col-lg-3" style="margin:5px 0;">
                                        <div class="clean-product-item">
                                            <div class="image" style="width:300px; height:200px; margin-left:-70px; ">
                                            <a href="<?php echo BASE_URL . '/san-pham/'. TienIch::vn_to_str($product ['p_name'] ).'-' .$product['p_id'] ?>"><img style="width:15rem; height:150px; padding: 0 0 0 20px;" class="img-fluid d-block mx-auto" src="<?php echo BASE_URL .'/uploads/' .$product['p_image'] ?>"></a>
                                            </div>
                                            <div class="product-name"><?php  echo $product['p_name'] ?> </div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3  ><?php echo $product['p_price']?> $</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- san pham o day  -->

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sản phẩm đang hot -->
    <!-- phan trang o day -->


 


    <!-- Sản phẩm đang giảm giá -->
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Sản Phẩm Đang Được Giảm Giá</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products" style="margin-left:20px;">
                            <div class="row no-gutters">
                                <!-- san pham o day  -->
                                <?php foreach ($pruductHot as $product) {  ?>
                                    <div class="col-12 col-md-6 col-lg-3" style="margin:5px 0;">
                                        <div class="clean-product-item">
                                            <div class="image" style="width:300px; height:200px; margin-left:-70px; ">
                                            <a href="<?php echo BASE_URL . '/san-pham/'. TienIch::vn_to_str($product ['p_name'] ).'-' .$product['p_id'] ?>"><img style="width:15rem; height:150px; padding: 0 0 0 20px;" class="img-fluid d-block mx-auto" src="<?php echo BASE_URL .'/uploads/' .$product['p_image'] ?>"></a>
                                            </div>
                                            <div class="product-name"><?php  echo $product['p_name'] ?> </div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3><?php echo $product['p_price']?> $</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- san pham o day  -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sản phẩm đang giảm giá -->
    <!-- phan trang o day -->



</main>
<?php include './src/views/user/footer.php'; ?>