<?php
class AdminController
{

    public static function Cate()
    {
        $productmodel = new ProductModel();
        $productList = $productmodel->getProduct();
        include_once ROOT_DIR . '/src/views/admin/admin-product.php';
    }


    public static function Admin_danh_muc()
    {
        $categoryModel = new CategoryModel();
        $categories =  $categoryModel->getCategories();
        include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
    }

    //thêm sản phẩm
    public static function ProductAdd()
    {
        $categoryModel = new CategoryModel();
        $categories =  $categoryModel->getCategories();
        include_once ROOT_DIR . '/src/views/admin/product-them.php';
    }

    //sửa danh mục
    public static function CategoryChange()
    {
        include_once ROOT_DIR . '/src/views/admin/danh-muc-sua.php';
    }
    //thêm danh mục
    public static function CategoryAdd()
    {
        $category = new CategoryModel();
        $categories = $category->getCategories();
        include_once ROOT_DIR . '/src/views/admin/danh-muc-them.php';
    }
    //xóa sản phẩm
    public static function ProductDel()
    {
        $id = $_REQUEST['id'];
        $productDel = new ProductModel();
        $productList = $productDel-> getProduct();
        $productDels = $productDel->deleteProduct($id);
        // $productList = $productDel->getProduct();
        include_once ROOT_DIR . '/src/views/admin/admin-product.php';
    }

    //check đăng nhập
    public static function Check()
    {
        //session_start();
        $productModels = new ProductModel();
        $productList = $productModels->getProductsView();
        $pruductHot = $productModels->getProductsBySale();
        $slider = new sliderModel();
        $sliders = $slider->getSliderAll();
        $categoryModel = new CategoryModel();

        $categories =  $categoryModel->getCategories();
        $userModel = new UserModel();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $userModel->login($email, $password);

            if ($user) {
                $_SESSION['email'] = $user["email"];

                //session_start();
                if ($user['role'] == 1) {
                    include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
                } else if ($user['role'] == 0) {
                    include_once ROOT_DIR . '/src/views/user/trangchu.php';
                } else {
                    $failed = "<p style='Color:black'>đăng nhập Failed</p>";
                    echo  $failed;
                    include_once ROOT_DIR . '/src/views/login/login.php';
                }
            }
        }
    }

    // bước 2 : copy bên trên , sửa $ theo name từng cái và nhớ tên hàm 
    // bước 2.1 qua bên route
    public static function ProductChange()
    {

        // $categoryModel = new CategoryModel();
        // $categories =  $categoryModel->getCategories();
        // include ROOT_DIR . '/src/views/admin/product-sua.php';
        $categoryModel = new CategoryModel();
        $productModel = new ProductModel();
        $categories =  $categoryModel->getCategories();
        if (count(URL) > 1) {

            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";

            $product = $productModel->getProductInfo($id, $name);
            if (empty($product)) {
                include ROOT_DIR . '/src/views/admin/404.php';
            } else {
                $categories_product = $categoryModel->getCategoriesProduct($id);
                include ROOT_DIR . '/src/views/admin/product-sua.php';
            }
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
    }
    //check lấy mk
    public static function CheckForgot()
    {
        if (!empty($_POST['forgot'])) {
            $forgot = $_POST['forgot'];
            var_dump($forgot);
        }
    }
    // check them cate
    public static function CheckAddCate()
    {  $categoryModel = new CategoryModel();
        $categories =  $categoryModel->getCategories();
        if (
            !empty($_POST['categoryt_id'])
            && !empty($_POST['categoryt_name'])
        ) {
            $category = new CategoryModel();
            
            $categoryt_id = $_POST['categoryt_id'];
            $categoryt_name = $_POST['categoryt_name'];
            $categoryAdd = $category->addCategory($categoryt_id, $categoryt_name);
            if ($categoryAdd) {
                echo $notify = "đã thêm thành công";
                include_once ROOT_DIR . '/src/views/admin/admin-danhmuc.php';
            } else {
                echo $notify = "thêm thất bại";

                include_once ROOT_DIR . '/src/views/admin/danh-muc-them.php';
            }
        }
    }
    //sửa danh mục
    public static function CheckFixCate()
    {
        if (
            !empty($_POST['categoryt_id'])
            && !empty($_POST['categoryt_name'])
        ) {
            $categoryt_id = $_POST['categoryt_id'];
            $categoryt_name = $_POST['categoryt_name'];
        }
    }
    // check thêm sản phẩm
    public static function CheckAddProduct()
    {
        $productmodel = new ProductModel();
       
        $productList = $productmodel->getProduct();
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productImage = $_POST['productImage'];
        $productDescription = $_POST['productDescription'];
        $status = $_POST['status'];
        $lastupdate = $_POST['lastupdate'];
        $sale = $_POST['sale'];
        $c_id = $_POST['c_id'];
        $p_id = $_POST['p_id'];

        $addproduct = $productmodel->ProductsAdd($productName, $productPrice, $productImage, $productDescription, $status, $lastupdate, $sale);
        $addproductcategory = $productmodel->addCategoryProduct($c_id,$p_id);
        if ($addproduct) {
            echo $notify = "đã thêm thành công";
            include_once ROOT_DIR . '/src/views/admin/admin-product.php';
        } else {
            echo $notify = "thêm thất bại";

            include_once ROOT_DIR . '/src/views/admin/product-them.php';
        }
        // var_dump($productName);
        // var_dump($productPrice);
        // var_dump($productImage);
        // var_dump($productDescription);
        // var_dump($status);
        // var_dump($lastupdate);
        // var_dump($sale);
        // var_dump($catename);

    }
    // check sửa sản phẩm 
    public static function CheckFixProduct()
    {
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productImage = $_POST['productImage'];
        $productDescription = $_POST['productDescription'];
        $status = $_POST['status'];
        $lastupdate = $_POST['lastupdate'];
        $sale = $_POST['sale'];
        $catename = $_POST['cate_name'];
    }
}
