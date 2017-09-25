<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */
ini_set('display_errors',1);
session_start();

include ('public/config.php');
// Load cac function globals - Lazy load, loadview
include ('public/functions.php');
// Load connection Database
include ('public/database.php');
$request = $_GET['action'];
$controller = $_GET['controller'];
if(!isset($controller)){
    $controller = 'users';
}
require ('controller/'.$controller.'.php');
$controllers = new users();
switch ($request){

    case 'listView':
        $controllers->listView();
        break;
    case 'edit':
        $controllers->edit();
        break;
    case 'create':
        $controllers->create();
        break;
    case 'del':
        $controllers->delete();
        break;
    case 'handleCreate':
        $controllers->handleCreate();
        break;
    case 'handleUpdate':
        $controllers->handleUpdate();
        break;
    default :
        break;
}