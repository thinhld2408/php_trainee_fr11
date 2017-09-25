<?php
/**
 * Created by PhpStorm.
 * User: smartosc
 * Date: 25/09/2017
 * Time: 10:00
 */
ini_set('display_errors',1);
session_start();
//Khai bao cac config cua MVC
include ('public/config.php');
// Load cac function globals - Lazy load, loadview
include ('public/functions.php');
// Load connection Database
include ('public/database.php');
$request = $_GET['action'];
$controller = $_GET['controller'];
if(!isset($controller)){
    $controller = 'students';
}
require ('controller/'.$controller.'.php');
$controllers = new students();
switch ($request){
    case 'listing':
        //TODO listing danh sach hoc sinh
        $controllers->listing();
        break;
    case 'edit':
        //TODO edit danh sach hoc sinh
        $controllers->update();
        break;
    case 'new':
        //TODO tao danh sach hoc sinh
        $controllers->create();
        break;
    default :
        //TODO : Homepage
        break;
}