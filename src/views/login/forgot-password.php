
    <title>Forgotten Password - ABC_SHOP</title>
    <?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>
<body class="bg-gradient-primary" style="margin-top: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-password-image" style="background-image: url(&quot;<?php echo BASE_URL.'/assets/img/log3.jpg' ?>&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2">Forgot Your Password?</h4>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                    </div>
                                    <!-- bước 1 : action=" echo BASE_URL.'/check-login' " method="POST" --> 
                                    <!-- b1.2 check name -->
                                    <!-- qua admin cotroler -->
                                    <!-- ctrl +/ --> 
                                    <!--                                               tên ở đây                                     -->
                                    <form class="user" action="<?php echo BASE_URL.'/check-forgot'?> " method="POST" > 
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."  name="forgot" >  
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit">Reset Password</button>
                                    </form>
                                    <div class="text-center">
                                        <hr><a class="small" href="<?php echo BASE_URL . '/dang-ki' ?>">Create an Account!</a>
                                    </div>
                                    <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/dang-nhap' ?>">Already have an account? Login!</a></div>
                                    <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/admin' ?>">If you are admin Click here</a></div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ROOT_DIR.'/src/views/user/footer.php'; ?>