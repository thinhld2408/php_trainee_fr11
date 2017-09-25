<?php
/**
 * Created by PhpStorm.
 * User: smartosc
 * Date: 25/09/2017
 * Time: 10:14
 */

Class students
{
    function listing()
    {
            $models = new model_students();
            $listingStudents = $models->list_st('tbluser');
            $data['listuser'] = $listingStudents;
            loadview('listing',$data);

    }

    function delete(){

    }

    function update(){

    }

    function create(){

    }
}