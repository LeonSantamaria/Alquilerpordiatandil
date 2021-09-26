<?php
require_once "src/pagina.php"; 
require_once "src/paginaConstruccion.php"; 

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'paginaConstruccion'; 
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'pagina':
        showIndex();
        break;
    case 'paginaConstruccion':
        ShowPaginaConstruccion(); 
        break;
    default:
        break;
}



?>