<title>Admin-Category</title>
<?php include ROOT_DIR.'/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php';?>
<div class="container-fluid">
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">

                        <!-- them san pham -->
                        <div class="card-header py-3" style="justify-content: space-between; display: flex; ">
                            <p class="text-primary m-0 font-weight-bold">Category</p>
                            <a href="<?php echo BASE_URL . '/category-them' ?>" style="text-decoration: none;" >
                                <button type="button" onclick="showMess" class="btn btn-info "
                                style="margin-right: 1rem;">Thêm Danh Mục <i style="padding-left:7px;"
                                class="fas fa-plus-circle"></i></button>
                            </a>
                        </div>
                        <!-- them san pham -->

                        <div class="card-body">

                        

                            <!-- phan san pham -->
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                          
                                           
                                        </tr>
                                    </thead> 
                                    <?php foreach ($categories as $category) {  ?>
                                    <tbody style="border-bottom: 2px solid #e3e6f0;" >
                                        <tr>
                                            <td style="padding-top:1rem;"><?php echo $category["c_id"]?></td>
                                            <td style="padding-top:1rem;"><?php echo $category["c_name"]?></td>
                                            <td>
                                            <a href="<?php echo BASE_URL . '/category-sua' ?>" style="text-decoration: none;" >
                                                <button style="border-radius: 5px; width:80px  " type="button" onclick="showMess"
                                                class="btn btn-success btn-sm btn-block">Sửa <i
                                                style="padding-left:7px;" class="fas fa-edit"></i> </button>
                                            </a> 
                                            </td>
                                            
                                        </tr>

                                    </tbody >
                                    <?php } ?>
                                    
                                </table>
                            </div>
                            <!-- phan san pham -->


                            
                        </div>
                    </div>
                </div>
            </div>


            <?php include ROOT_DIR.'/src/views/admin/admin-footer.php'; ?>