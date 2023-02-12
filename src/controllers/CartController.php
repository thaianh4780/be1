<?php
class CartController
{
    // public static function Cart()

    // {
    //     $giohang = $_SESSION["cart"];
    //     var_dump($giohang);
       
        
    // }
    public static function CartControllers()
    {
        $products = [];
        $total = 0;
        $productModel = new ProductModel();
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                $product = $productModel->getProductInfo($key, $value);
                array_push($products, $product);
                $price = $product['p_price'] * (100 - $product['sale']) / 100;
                $total += $price;
            }
        }
       include_once ROOT_DIR . '/src/views/user/shopping-cart.php';
    }
    public static function CheckoutCartController()
    {
        if (!empty($_SESSION['cart']) && !empty($_GET['address']) && !empty($_GET['phone']) && !empty($_GET['customer'])) {
            $address = $_GET['address'];
            $phone = $_GET['phone'];
            $customer = $_GET['customer'];
            var_dump($address);
            var_dump($phone);
            var_dump($customer);
            // header("Location: " . BASE_URL . '/trang-chu');
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
    }
    public static function AddCartController(){
        if (count(URL) > 1) {
            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";
            if (empty($_SESSION['cart'])) {
                $_SESSION['cart'] = [$id =>  $name];
            } else {
                $_SESSION['cart'][$id] = $name;
            }
            header("Location: " . BASE_URL . '/san-pham/' . URL[1]);
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
    }
   
    public static function RemoveCartItemController()
    {
        if (count(URL) > 1 && !empty($_SESSION['cart'])) {
            unset($_SESSION['cart'][URL[1]]);
            header("Location: " . BASE_URL . '/gio-hang');
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
    }
                      
    public static function Pay()
    {
        
        $products = [];
        $total = 0;
        $productModel = new ProductModel();
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                $product = $productModel->getProductInfo($key, $value);
                array_push($products, $product);
                $price = $product['p_price'] * (100 - $product['sale']) / 100;
                $total += $price;
            }
        }
       
        include_once ROOT_DIR . '/src/views/user/payment-page.php';
    }

    public static function Addcart()
    {
        $productCart = new ProductModel();

        if (count(URL) > 1) {
            /**
             * Tách chuỗi tên-id thành 2 biến name và id
             */

            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";

            $carts = $productCart->getProductInfo($id, $name);
            if (!empty($carts)) {
                if (empty($_SESSION["cart"])) {
                    $_SESSION["cart"] = [$carts];
                } else {
                    if (!in_array($carts, $_SESSION['cart'])) {
                        array_push($_SESSION["cart"], $carts);
                    }
                }
            }else{
                include ROOT_DIR . '/src/views/admin/404.php';  
            }
        } else {
            include ROOT_DIR . '/src/views/admin/404.php';
        }
         unset($_SESSION["cart"]);

     
 }
    
    
}