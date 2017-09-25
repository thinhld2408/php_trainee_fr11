<?php
/**
 * Created by PhpStorm.
 * User: smartosc
 * Date: 25/09/2017
 * Time: 10:05
 */

//TODO lazy load

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