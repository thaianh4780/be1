 <!-- navbar -->
 <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
     <div class="container-fluid d-flex flex-column p-0">
         <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?php echo BASE_URL ?>">
             <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
             <div class="sidebar-brand-text mx-3"><span>ABC_SHOP</span></div>
         </a>
         <hr class="sidebar-divider my-0">
         <ul class="navbar-nav text-light" id="accordionSidebar">
             <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'san-pham-admin' ? 'active' : '' : '' ?>"><a class="nav-link" href="<?php echo BASE_URL . '/san-pham-admin' ?>"><i class="fas fa-box-open"></i><span>Product</span></a></li>
             <li class="nav-item <?php echo count(URL) != 0 ? URL[0] == 'danh-muc-admin' ? 'active' : '' : '' ?>"><a class="nav-link " href="<?php echo BASE_URL . '/danh-muc-admin' ?>"><i class="fas fa-table"></i><span>Category</span></a></li>
             <li class="nav-item<?php echo count(URL) == 0 || URL[0] == 'trang-chu' ? 'active' : '' ?> "><a class="nav-link " href="<?php echo BASE_URL ?>"><i class="fas fa-home"></i><span>Home</span></a></li>
         </ul>
         <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
     </div>
 </nav>



 <div class="d-flex flex-column" id="content-wrapper">
     <div id="content">
         <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
             <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                 <ul class="navbar-nav flex-nowrap ml-auto">
                     <div class="d-none d-sm-block topbar-divider"></div>
                     <li class="nav-item dropdown no-arrow">
                         <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?Php echo "xin chào ".$_SESSION['email']?></span> </span></a>
                         <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                 
                                
                         <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo BASE_URL . '/log-out' ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>

                             </div>

                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
<!-- navbar -->