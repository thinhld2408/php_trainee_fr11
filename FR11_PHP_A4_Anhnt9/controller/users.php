<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */

Class users
{
    function listView()
    {
        $models = new model_users();
        $listingUser = $models->getListView('tbl_trainee');
        $data['listUser'] = $listingUser;
        loadview('listView',$data);

    }

    function delete(){
        $models = new model_users();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $models->delete('tbl_trainee',$id);
            if($result){
                header('location:index.php?controller=users&action=listView');
            }
        }
    }

    public function edit(){
        $models = new model_users();
        if(isset($_GET['id'])){
            $data['listUsers']['id'] = $_GET['id'];
            $data['listUsers'] = $models->getDataById('tbl_trainee',$data['listUsers']['id']);
            loadview('edit',$data);
        }
    }

    public function create(){
        $models = new model_users();
        loadview('create');
    }
    public function handleUpdate(){
        $err = array();
        $model = new model_users();

        if(isset($_POST['save'])){
            $_users['id'] = $_GET['id'];
            if (empty($_POST["username"])) {
                $err['username'] = "Name is required";
            } else {
                $_users['username'] = $model->convertData($_POST["username"]);
                // check if name only contains letters and whitespace
                if (!preg_match(' /^[a-zA-Z0-9_ ]{2,50}$/ ',$_users['username'])) {
                    $err['username'] = "Invalid email format";
                }
            }

            if (empty($_POST["email"])) {
                $err['email'] = "Email is required";
            } else {
                $_users['email'] = $model->convertData($_POST["email"]);
                // check if name only contains letters and whitespace
                if (!filter_var($_users['email'], FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = "Invalid email format";
                }
            }
            if (empty($_POST["address"])) {
                $err['address'] = "Address is required";
            } else {
                $_users['address'] = $model->convertData($_POST["address"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_users['address'])) {
                    $err['address'] = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["country"])) {
                $err['country'] = "Address is required";
            } else {
                $_users['country'] = $model->convertData($_POST["country"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_users['country'])) {
                    $err['country'] = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["phone"])) {
                $err['phone'] = "Phone is required";
            } else {
                $_users['phone'] = $model->convertData((int)$_POST["phone"]);
                // check if name only contains letters and whitespace
                if (!preg_match(' /^[0-9]{9,12}$/ ',$_users['phone'])) {
                    $err['phone'] = "Invalid phone format";
                }
            }

            if (empty($_POST["gender"])) {
                $err['gender'] = "Gender is required";
            } else {
                $_users['gender'] = $model->convertData($_POST["gender"]);
            }

            if($err){
                $data['err'] = $err;
                loadview('create',$data);
            }else{
                $result = $model->update('tbl_trainee',$_users);
                if($result){
                    header('location:index.php?controller=users&action=listView');
                }else{
                    return false;
                }

            }


        }
    }

    function handleCreate(){
        $err = array();
        $model = new model_users();

        if(isset($_POST['create'])){
            if (empty($_POST["username"])) {
                $err['username'] = "Name is required";
            } else {
                $_users['username'] = $model->convertData($_POST["username"]);
                // check if name only contains letters and whitespace
                if (!preg_match(' /^[a-zA-Z0-9_ ]{2,50}$/ ',$_users['username'])) {
                    $err['username'] = "Invalid email format";
                }
            }

            if (empty($_POST["email"])) {
                $err['email'] = "Email is required";
            } else {
                $_users['email'] = $model->convertData($_POST["email"]);
                // check if name only contains letters and whitespace
                if (!filter_var($_users['email'], FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = "Invalid email format";
                }
            }
            if (empty($_POST["address"])) {
                $err['address'] = "Address is required";
            } else {
                $_users['address'] = $model->convertData($_POST["address"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_users['address'])) {
                    $err['address'] = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["country"])) {
                $err['country'] = "Address is required";
            } else {
                $_users['country'] = $model->convertData($_POST["country"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$_users['country'])) {
                    $err['country'] = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["phone"])) {
                $err['phone'] = "Phone is required";
            } else {
                $_users['phone'] = $model->convertData((int)$_POST["phone"]);
                // check if name only contains letters and whitespace
                if (!preg_match(' /^[0-9]{9,12}$/ ',$_users['phone'])) {
                    $err['phone'] = "Invalid phone format";
                }
            }

            if (empty($_POST["gender"])) {
                $err['gender'] = "Gender is required";
            } else {
                $_users['gender'] = $model->convertData($_POST["gender"]);
            }

            if($err){
                $data['err'] = $err;
                loadview('create',$data);
            }else{
                $result = $model->create('tbl_trainee',$_users);
                if($result){
                    header('location:index.php?controller=users&action=listView');
                }else{
                    return false;
                }

            }


        }
    }
}