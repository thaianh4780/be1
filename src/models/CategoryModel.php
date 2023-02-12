<?php
class CategoryModel extends Db{
  
    
   
   
      // lấy ra tất cả danh mục
      public function getCategories()
      {
          // $sql = parent::$conection->prepare("SELECT * FROM `categories` where `status` = 1");
          // return parent::select($sql);
          $sql = parent::$conection->prepare("SELECT * FROM `categories` WHERE 1");
          return parent::select($sql); // xuất kết quả
      }
      public function getCategoriesProduct($id)
      {
          $sql = parent::$conection->prepare("SELECT `categories`.* FROM `product_category` JOIN `categories` ON `product_category`.`category_ID` = `categories`.`c_id` WHERE `productid` = ?");
          $sql->bind_param('i', $id);
          return parent::select($sql);
      }
  
    //  lấy số lượng sản phẩm theo category
      public function getProductsBYID($id, $name, $start)
      {
          $name = str_replace(' ', '%', $name);
          $name = "%" . $name . "%";
          $sql = parent::$conection->prepare("SELECT `product` .* FROM `product` JOIN `product_category` ON `product_category`.`productID` = `product`.`p_id` JOIN `categories` 
           ON `product_category`.`category_ID` = `categories`.`c_id` 
           WHERE `product`.`status` = 1 AND `product_category`.`category_ID` =? 
           AND `categories`.`c_name` LIKE ? ORDER BY `product`.`p_id` DESC LIMIT ?, 12");
          $sql->bind_param("isi", $id, $name, $start);
          return parent::select($sql); // xuất kết quả
      }
  
  
      // thêm danh sách sản phẩm
      public function addCategory($id,$c)
      {
          $sql = parent::$conection->prepare("INSERT INTO `categories`(`c_id`, `c_name`)  VALUES (?,?)");
          $sql->bind_param('is',$id,$c);
          return $sql->execute();
      }
     
  
      // sửa danh mục sản phẩm
      public function editCategory($c, $cid)
      {
          $sql = parent::$conection->prepare("UPDATE `categories` SET `c_name`=? WHERE `c_id` = ?");
          $sql->bind_param('si', $c, $cid);
          return $sql->execute();
      }
  
    
  
      public function getProductsCategory($id, $name, $page)
      {
          $name = str_replace(' ', '%', $name);
          $name = "%" . $name . "%";
          $start = ($page - 1) * 12;
          $sql = parent::$conection->prepare("SELECT
          product.*
      FROM
          product
      JOIN product_category ON product_category.`productID` = product.`p_id`
      JOIN categories ON product_category.`category_id` = categories.`c_id`
      WHERE
          product.`status` = 1 AND product_category.`category_id` = ? AND categories.`c_name`
  LIKE ?
      ORDER BY
          product.`p_id`
      DESC
      LIMIT ?, 12");
          $sql->bind_param("isi", $id, $name, $start);
          return parent::select($sql);
      }
     
     
     
      /**
       * Lấy số lượng sản phẩm thuộc danh mục
       */
      public function getCountProductsCategory($id, $name)
      {
          $sql = parent::$conection->prepare("SELECT
          COUNT(`product`.`product_id`)
      FROM
          `product`
      JOIN `categories_products` ON `categories_products`.`product_id` = `product`.`product_id`
      JOIN `categories` ON `categories_products`.`category_id` = `categories`.`categories_id`
      WHERE
          `product`.`status` = 1 AND `categories_products`.`category_id` = ? AND `categories`.`category_name` LIKE ?");
          $sql->bind_param("is", $id, $name);
          return parent::select($sql)[0]['COUNT(`product`.`product_id`)'];
      }
      public static function getCategorybyID($id){
        
        $sql = parent::$conection->prepare("SELECT * FROM `categories` WHERE c_id = ?");
        $sql->bind_param('i',$id);
        return $sql->execute();
      }
   
}
