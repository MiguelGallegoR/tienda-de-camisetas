<?php
require_once 'load_auto.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
session_start();

function show_error(){
    $error= new errorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nombre_controllador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && (!isset($_GET['action']))){
    $nombre_controllador = controller_default;
}else{
    show_error();
    exit();
}


if(class_exists($nombre_controllador)){
    $controlador = new $nombre_controllador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();

    }elseif(!isset($_GET['controller']) && (!isset($_GET['action']))){
        $action_default = action_default;
        $controlador->$action_default();
    }else{
        show_error();
    }


}else{
    show_error();
}

require_once 'views/layout/footer.php';