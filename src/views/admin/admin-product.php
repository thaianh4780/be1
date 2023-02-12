<title>Admin-Product</title>
<?php include ROOT_DIR . '/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php'; ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Team</h3>
    <div class="card shadow">

        <!-- them san pham -->
        <div class="card-header py-3" style="justify-content: space-between; display: flex; ">
            <p class="text-primary m-0 font-weight-bold">Employee Info</p>
            <a href="<?php echo BASE_URL . '/product-them' ?>">
                <button type="button" onclick="showMess" class="btn btn-info " style="margin-right: 1rem;">Thêm Sản Phẩm <i style="padding-left:7px;" class="fas fa-plus-circle"></i></button>
            </a>
        </div>
        <!-- them san pham -->

        <div class="card-body">

            <!-- phan che do hien thi va` nut tim` kiem -->
            <div class="row">
               
               
            </div>
            <!-- phan che do hien thi va` nut tim` kiem -->


            <!-- phan san pham -->
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach ($productList as $product) {  ?>
                        <tbody style="border-bottom: 2px solid #e3e6f0;">
                            <tr>
                                <td style="padding-top:1rem;"><?php echo $product["p_id"]?></td>
                                <td style="padding-top:1rem;"><?php echo $product["p_name"]?></td>
                                <td style="padding-top:1rem;"><?php echo $product["p_price"]?></td>
                                <td style="padding-top:1rem;">
                                <img style=" width: 80px; height: 80px;" src="<?php echo BASE_URL .'/uploads/' .$product['p_image'] ?>">
                                </td>
                                <td style="padding-top:1rem;"><?php echo $product["p_description"]?> </td>
                                <td  > 
                                <a href="<?php echo BASE_URL . '/product-sua' ?>" style="text-decoration: none;">
                                        <button style="border-radius: 5px; height: 40px; width:80px" type="button" onclick="showMess" class="btn btn-success btn-sm btn-block">
                                            Sửa
                                            <i style="padding-left:7px;" class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    
                                </td>
                                <td>
                                    <a href="<?php echo BASE_URL . '/product-xoa?id=' . $product['p_id'] ?>" style="text-decoration: none;">
                                        <button style="border-radius: 5px; height: 40px; width:80px" type="button" onclick="showMessage()" class="btn btn-danger btn-sm btn-block">
                                            Xóa
                                            <i style="padding-left:7px;" class="fas fa-trash"></i>
                                        </button>
                                </td>
                                <td></td>
                            </tr>

                        </tbody>
                    <?php } ?>

                </table>
            </div>
            <!-- phan san pham -->


            <!-- phan trang o day -->
            
                <!-- phan trang o day -->

            </div>
        </div>
    </div>
</div>
<script>
    function showMessage(){
        alert('bạn thực sự muốn xóa sản phẩm này !');
    }
</script>
<?php include ROOT_DIR . '/src/views/admin/admin-footer.php'; ?>
</div>

