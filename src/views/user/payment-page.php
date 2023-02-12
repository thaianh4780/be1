<title>Payment - ABC_SHOP</title>
<?php include ROOT_DIR . '/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php'; ?>

<body>

    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Payment</h2>
                </div>
                <form method="get" action="<?php echo BASE_URL . '/check-out/' ?>">

                    <!-- phan` product -->
                    <div class="products">
                        <h3 class="title">Checkout</h3>

                        <?php
                        foreach ($products as $product) {
                        ?>
                            <div class="item"><span class="price"><?php echo number_format($product['p_price'] * (100 - $product['sale']) / 100, 0, '', ','); ?>$</span>
                                <p class="item-name"><?php echo $product['p_name'] ?></p>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="total"><span>Total</span><span class="price"><?php echo number_format($total, 0, '', ',') ?>$</span></div>
                    </div>
                    <!-- phan` product -->

                    <!-- phan` form -->
                    <div class="card-details">
                        <div class="form-row">
                            <div class="form-group col-sm-12 ">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="exampleInputEmail1">Customer Name</label>
                                <input type="text" class="form-control" name="customer">
                            </div>
                            <div  class="col-sm-12">
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Proceed</button></div>
                            </div>

                        </div>
                    </div>

                    <!-- phan` form -->

                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>
            </div>
        </section>
    </main>
</body>
<?php include ROOT_DIR . '/src/views/user/footer.php'; ?>