

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
<?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>

    <title>Category - ABC_SHOP</title>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="margin-top: 50px;" >
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
                                        <?php foreach ($categories as $category){?>
                                            <div>
                                                <a href="<?php echo BASE_URL . '/danh-muc/'. TienIch::vn_to_str($category ['c_name'] ).'-' .$category['c_id'] ?>"><?php echo $category["c_name"]?></a>
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
                                            <a href="<?php echo BASE_URL . '/san-pham/'. TienIch::vn_to_str($product ['p_name'] ).'-' .$product['p_id'] ?>"><img style="width:15rem; height:150px; padding: 0 0 0 20px;" class="img-fluid d-block mx-auto" src="<?php echo BASE_URL .'/uploads/' .$product['p_image'] ?>"></a>
                                            </div>
                                            <div class="product-name"><?php echo $product["p_name"]?></div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3><?php echo $product["p_price"]?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                           


                            <?php include ROOT_DIR ."/src/views/user/pagination.php" ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;Brand 2021</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>
