<?php
require_once 'load_auto.php';

if(isset($_GET['controller'])){
    $nombre_controllador = $_GET['controller'].'Controller';
}else{
    echo 'La página que buscas no existe';
    exit();
}


if(class_exists($nombre_controllador)){
    $controlador = new $nombre_controllador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();

    }else{
        echo'La página que buscas no existe';
    }


}else{
    echo 'La página que buscas no existe';
}