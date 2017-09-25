<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */

function __autoload($class)
{
    $class = str_replace("_",'/',$class);
    $class= str_replace("model",'models',$class);

    require($class.'.php');
}

function redirect($url)
{
    header("location: $url");
    exit();
}

function debug($obj)
{
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}

function loadview($url,$data="")
{
    include('view/'.$url.'.phtml');
}