<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Priymak
 * Date: 05.02.2016
 * Time: 21:20
 */

require_once 'models/model_users.php';
require_once 'lib.php';

if (!empty($_POST['login'])) $login = $_POST['login'];
if (!empty($_POST['pass'])) $pass = $_POST['pass'];

//reg user
if(isset($_POST['sign'])) {
    setUser($login, $pass, $pdo);
}
//auth user
$user = getUser($login, $pass, $pdo);

if (!$user) {
    header("Location: index.php?auth=error");
    exit;
}

$user = serialize($user);
setcookie ("user", $user);;

header('Location: index.php');