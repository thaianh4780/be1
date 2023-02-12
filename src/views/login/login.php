<title>Login - ABC_SHOP</title>
<?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>

<body class="bg-gradient-primary" style="margin-top: 80px;" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;<?php echo BASE_URL.'/uploads/login.png' ?> &quot;);">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
       
                                        <h4 class="text-dark mb-4" style="margin-left: -20px;" >Welcome Back!</h4>
                                    </div>
                                    <form class="user" action="<?php echo BASE_URL.'/check-login'?> " method="POST" >
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
                                     
                                    </form>
                                    <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/quen-mat-khau' ?>">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/dang-ki' ?>">Create an Account!</a></div>
                                    <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/admin' ?>">If you are admin Click here</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ROOT_DIR . '/src/views/user/footer.php'; ?>