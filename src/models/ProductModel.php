<?php

class ProductModel extends Db
{

    // lấy  sản phẩm theo view

    public function getProductsView()
    {
                   
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `status` = 1 ORDER BY `view` ASC, `p_id` ASC LIMIT 0, 12");
        return parent::select($sql); // xuất kết quả
    }


    //lấy sp  theo sale cao nhất

    public function getProductsBySale()
    {
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `status` = 1 ORDER BY sale DESC, p_id DESC LIMIT 0,12");
        return parent::select($sql); // xuất kết quả
    }
    

    public function getProduct(){
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `status` = 1  ");
        return parent::select($sql); // xuất kết quả
    }

    

    
    // lấy sản phẩm theo từ khóa search (12sp) từ cao đến thấp. => có phân trang
    public function searchProducts($search,$page)
    {   $start = ($page - 1) * 12;
        $search=str_replace(' ', '%', $search);
        $search = "%" . $search . "%";
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("SELECT * FROM product WHERE p_name LIKE ?   ORDER BY p_id DESC LIMIT ?, 12");
        $sql->bind_param('si', $search,$start);
        
        return parent::select($sql);
    }
    //đếm số lượng sản phẩm sau tìm kiếm để phân trang
    public function CountsearchProducts($search)
    {
        $search=str_replace(' ', '%', $search);
        $search = "%" . $search . "%";
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("SELECT count(p_id) FROM product WHERE p_name LIKE ? ");
        $sql->bind_param('s', $search);
        
        return parent::select($sql)[0]["count(p_id)"];
    }
     /**
     * Lấy số lượng sản phẩm thuộc danh mục
     */
    public function getCountProductsCategory($id, $name)
    {
        $sql = parent::$conection->prepare("SELECT
        COUNT(`product`.`p_id`)
    FROM
        `product`
    JOIN `product_category` ON `product_category`.`productID` = `product`.`p_id`
    JOIN `categories` ON `product_category`.`category_id` = `categories`.`c_id`
    WHERE
        `product`.`status` = 1 AND `product_category`.`category_id` = ? AND `categories`.`c_name` LIKE ?");
        $sql->bind_param("is", $id, $name);

        return parent::select($sql)[0]['COUNT(`product`.`p_id`)'];

    }

    /**
     * Cập nhật lượt truy cập của sản phẩm
     */
    public function updateViewProduct($id)
    {
        //$name=str_replace(' ', '%', $name);
       // $name = "%" . $name . "%";
        $sql = parent::$conection->prepare("UPDATE `product` SET `view` = `view`+1 WHERE `p_id` = ? ");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    /**
     * Lấy thông tin của sản phẩm
     * Nếu sản phẩm không tồn tại trả về null
     */
    public function getProductInfo($id, $name)
    {
        
        $sql = parent::$conection->prepare("SELECT * FROM `product` WHERE `p_id` = ? AND `p_name` LIKE ? AND  `status` = 1");
        $sql->bind_param("is", $id, $name);
        $result = parent::select($sql);
        return count($result) != 0 ? parent::select($sql)[0] : null;
    }
    
    /*
    *thêm sản phẩm
    tên -giá-hình ảnh-chi tiết-trạng thái-lần cuối thay đổi-giảm giá
    */
    public function ProductsAdd($productName ,$productPrice, $productImage , $productDescription,$status ,$lastupdate ,$sale )
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("INSERT INTO `product`(`p_name`, `p_price`, `p_image`, `p_description`, `status`, `lastupdate`, `sale`) VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param('sissiii',$productName ,$productPrice, $productImage , $productDescription,$status ,$lastupdate ,$sale );
        return $sql->execute();
    }
    /*
    xóa sản phẩm phẩm theo id và tên
    
    */
    public function deleteProduct($id)
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("DELETE FROM `product` WHERE p_id = ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }

    /*
    sửa sản phẩm
     */
    public function UpdateProduct($productName ,$productPrice, $productImage , $productDescription,$status ,$lastupdate ,$sale ,$id){
        $sql = parent::$conection->prepare("UPDATE `product` SET  `p_name`= ? ,`p_price`= ? , `p_image`= ? , `p_description`= ?,`status`= ? ,`lastupdate`= `lastupdate`+1,`sale`= ?, WHERE `p_id`= ? and lastupdate = `lastupdate`");
        $sql-> bind_param('sissiiii',$productName ,$productPrice, $productImage , $productDescription,$status ,$sale ,$id, $lastupdate);
        return $sql-> execute();
        
    }
    public function addCategoryProduct($idc,$idp){
      
        $sql = parent::$conection->prepare("INSERT INTO `product_category`(`category_ID`, `productID`) VALUES (?,?)");
        $sql->bind_param('ii', $idc,$idp);
    }
}