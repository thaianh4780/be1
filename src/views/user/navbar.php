
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
      <div class="container">

            <a class="navbar-brand logo" style="padding-top: 10px;" href="<?php echo BASE_URL ?>">ABC SHOP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin: 10px 0; ">
                  <ul class="navbar-nav ml-auto">
                        <!-- tim kiem -->
                        <li class="nav-item" style="margin-right: 2rem; margin-left:20px;">
                              <form class="d-flex" action="<?php echo BASE_URL . '/tim-kiem' ?>" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                        </li>
                        <!-- tim kiem -->

                        <li class="nav-item <?php echo count(URL) == 0 || URL[0] == 'trang-chu' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo BASE_URL ?>">Home</a></li>
                        <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'danh-muc' ? 'active' : '' : '' ?> "><a class="nav-link" href="<?php echo BASE_URL . '/danh-muc' ?>">Category</a></li>
                        <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'gio-hang' ? 'active' : '' : '' ?> "><a class="nav-link" href="<?php echo BASE_URL . '/gio-hang' ?>">Shopping Cart</a></li>
                        <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'about' ? 'active' : '' : '' ?> "><a class="nav-link" href="<?php echo BASE_URL . '/about' ?>">About Us</a></li>
                        <?php if (empty($_SESSION["email"])) { ?>
                              <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'dang-nhap' ? 'active' : '' : '' ?> ?> ">
                                    <a class="nav-link" href="<?php echo BASE_URL . '/dang-nhap' ?>">Login</a>
                              </li>
                        <?php     } else { ?>
                            <?php echo "xin chào ". $_SESSION["email"] ?>
                              <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'dang-xuat' ? 'active' : '' : '' ?> ?> ">
                                    <a class="nav-link" href="<?php echo BASE_URL . '/log-out' ?>"> logout</a>
                              </li>

                        <?PHP
                        }
                        ?>
                  </ul>
            </div>
      </div>
</nav>