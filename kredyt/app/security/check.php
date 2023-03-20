<?php
require_once dirname(__FILE__).'/../../config.php';
session_start();

//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// jeśli brak zalogowania, to idź na strone logowania
if (empty($role) ){
    include _ROOT_PATH.'/app/security/login.php' ;
    //stop skryptu
    exit();
}