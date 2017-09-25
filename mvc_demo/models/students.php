<?php
/**
 * Created by PhpStorm.
 * User: smartosc
 * Date: 25/09/2017
 * Time: 10:18
 */
Class model_students extends database
{

    function update(){

    }

    function delete(){

    }

    function list_st($tblName){
        $sql = 'SELECT * From ' . $tblName ;
        $this->query($sql);
        $result = $this->fetchall();
        return $result;
    }
}