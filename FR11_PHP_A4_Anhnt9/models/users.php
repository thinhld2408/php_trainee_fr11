<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */
Class model_users extends database
{

    function getListView($tblName){
        $sql = 'SELECT * From ' . $tblName ;
        $this->query($sql);
        $result = $this->fetch_all();
        return $result;
    }

    public function create($tblName,$data){

        $sql="INSERT INTO $tblName (username, email, address, country, phone, gender) VALUES ('".$data['username']."','".$data['email']."','".$data['address']."','".$data['country']."',".$data['phone'].",'".$data['gender']."')";
        if($this->query($sql)){
            return true;
        }
    }

    function update($tblName,$data){
        $sql= "UPDATE $tblName SET username = '".$data['username']."', email = '".$data['email']."', address = '".$data['address']."', country = '".$data['country']."', phone = ".$data['phone'].", gender = '".$data['gender']."' WHERE id = '".$data['id']."'";
        if($this->query($sql)){
            return true;
        }
    }

    public function getDataById($tblName,$id){
        $sql="SELECT * FROM $tblName WHERE id = '".$id."'";
        $this->query($sql);
        $result = $this->fetch_one();
        return $result;
    }


    function delete($tblName,$id){
        $sql = "DELETE FROM $tblName WHERE id= '".$id."'";
        if($this->query($sql)){
            return true;
        }
    }

    function convertData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


}