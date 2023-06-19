<?php

class database
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=localhost;dbname=products",
                "admin",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends database {
    // Database connection and other necessary properties

    public function insertdata($productinfo,$files)
    {
        // Perform database insert operation using $data

//        var_dump($products);
//
        move_uploaded_file($files["tmp_name"],"ProductImage/" .$files["name"]);
        $imagePath= "ProductImage/".$files["name"];
        $products_name =$productinfo['product_name'];
        $price =$productinfo['price'];
        $sku =$productinfo['sku'];
        $brands =$productinfo['brands'];
        $manufactured =$productinfo['manufactured'];
        $availablestock =$productinfo['stock'];

      $this->db ->query( "Insert into productdetails (productname,productimage,SKU,price,brand,manufacturedate,availablestock) values ('$products_name','$imagePath','$sku','$price','$brands','$manufactured','$availablestock')");
//         header("location:/");

    }

    public function read($id) {
        $query =$this->db->query("select * from productdetails where id =$id");
        $query->execute();
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

        // Perform database select operation based on $id
    }

    public function update($id,$name,$email,$password) {

        $this->db ->query("Update form set name ='$name', email='$email',pass='$password' where id='$id'");
        header("location:/");

        // Perform database update operation based on $id and $data
    }

    public function delete($id) {
        $this->db ->query( "DELETE FROM productdetails WHERE id = $id;");
        header("location:/");

        // Perform database delete operation based on $id
    }

    public function getAllProductsFromDb() {
       $query =$this->db->query("select * from productdetails");
       $query->execute();
       $datas=$query->fetchAll(PDO::FETCH_OBJ);
       return $datas;

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             $query->execute();
        // Retrieve all users from the database
    }
}