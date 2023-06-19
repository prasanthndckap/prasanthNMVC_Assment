<?php
require_once "models/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {


        $this->userModel = new UserModel();
    }

    public function addproduct($productinfo,$files) {
        // Handle form submission for creating a new products
//       var_dump( "$user");

        if($productinfo && $files){
            $this->userModel->insertdata($productinfo,$files);
//            var_dump($files);

            header("location:/");
        }else{
            require "views/user/create.php";
        }

    }

//    public function edit($user) {
////        var_dump($user);
//
//        $this->userModel->update($user['id'],$user['User_Name'],$user['User_Email'],$user['Password']);
//        require 'views/user/edit.php';
//
//        // Handle form submission for updating an existing user
//    }
//
    public function delete($id) {
        $this->userModel->delete($id);

        // Handle user deletion
    }

    public function gettingAllUser() {
        $allProductdetails=$this->userModel->getAllProductsFromDb();
        require 'views/user/index.php';
//        var_dump($allProductdetails);
        // Retrieve all users from the UserModel and load the index view
    }

    public function viewOneUser($id) {
        $editProduct=$this->userModel->read("$id");
        require 'views/user/edit.php';



        // Retrieve a specific user from the UserModel and load the view view
    }
}
