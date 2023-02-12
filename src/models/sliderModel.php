<?php

class SliderModel extends Db
{
    // lấy tất cả slider
    public function getSliderAll()
    {
                   
        $sql = parent::$conection->prepare("SELECT * FROM `slider` WHERE 1");
        return parent::select($sql); // xuất kết quả
    }
    //lấy theo id
    public function getSliderID($id,$name)
    {
                   
        $sql = parent::$conection->prepare("SELECT * FROM `slider` WHERE s_id=? and s_img= ? ");
        $sql->bind_param('is',$id,$name);
        return parent::select($sql); // xuất kết quả
    }
   // xóa sản phẩm phẩm theo id và tên
    
   
    public function deleteSlider($id ,$name)
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("DELETE FROM `slider` WHERE s_id = ? and s_img = ?");
        $sql->bind_param('is',$id, $name);
        return $sql->execute();
    }
    //thêm slider
    public function AddSlider($id ,$name)
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("INSERT INTO `slider`(`s_id`, `s_img`) VALUES (?,?)");
        $sql->bind_param('is',$id, $name);
        return $sql->execute();
    }
    //sửa slider
    public function EditSlider($id ,$name)
    {
        //2. Viết câu SQL
        $sql = parent::$conection->prepare("UPDATE `slider` SET `s_img`= ? WHERE s_id= ?");
        $sql->bind_param('is' ,$name,$id);
        return $sql->execute();
    }


}