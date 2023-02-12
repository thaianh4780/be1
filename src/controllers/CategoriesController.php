<?php
class CategoriesController
{

    public static function getCate()
    {

        $categories = new CategoryModel();
        $categoriesList = $categories->getCategories();
        var_dump($categoriesList);
    }
    public static function addCate()
    {

        $name = 'thanh';
        $categories = new CategoryModel();
        $categoriesList = $categories->addCategory($name);
        var_dump($categoriesList);
    }

    public static function editCate()
    {

        $i = "1";
        $n = 'iphone';
        $categories = new CategoryModel();
        $categoriesList = $categories->editCategory($n, $i);
        var_dump($categoriesList);
    }

    public static function deleteCate()
    {

        $t = "13";

        $categories = new CategoryModel();
        $categoriesList = $categories->deleteCategory($t);
        var_dump($categoriesList);
    }

   


    public static function CategoryController()
    {


        $categoryModel = new CategoryModel();
        $productModel = new ProductModel();
        $categories =  $categoryModel->getCategories();
        /**
         * Nếu URL > 1 => đã xác định danh mục => Nếu danh mục không tồn tại => hiển thị trang 404
         * Ngược lại => chưa xác định danh mục => điều hướng đến danh mục đầu tiên trong mảng danh mục
         */
        if (count(URL) > 1) {
            /**
             * Tách chuỗi tên-id thành 2 biến name và id
             */
            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";

            /**
             * Mặc định page = 1
             * Nếu URL > 2 => có số trang => gắn page lại bằng cách tách chuỗi trang-page
             */
            $page = 1;
            if (count(URL) > 2) {
                $arr = explode("-", URL[2]);
                $page = $arr[count($arr) - 1];
            }

            /** 
             * Lấy số lượng sản phẩm hiện đang có dùng để phân trang (mỗi trang 12 sản phẩm)
             * Nếu số lượng sản phẩm không chia hết cho 12 => cộng thêm 1 vào số trang
             */
            $count = $productModel->getCountProductsCategory($id, $name);
            $count = $count % 12 == 0 ? intval($count / 12) : intval($count / 12) + 1;

            /**
             * Tạo đường dẫn dùng cho phân trang
             */
            $link = BASE_URL . '/danh-muc/' . URL[1] . '/trang-';
            $products = $categoryModel->getProductsCategory($id, $name, $page);
            include ROOT_DIR . '/src/views/user/danh-muc.php';
        } else {
            /**
             * Chuyển hướng đường dẫn
             */
            header("Location: " . BASE_URL . '/danh-muc/' . TienIch::vn_to_str($categories[0]['category_name']) . '-' . $categories[0]['categories_id']);
        }
    }
}
