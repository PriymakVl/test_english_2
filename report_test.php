<?php

require_once 'models/model_users.php';
require_once 'lib.php';

$num_show = $_GET['show'];
$num_answer = $_GET['answers'];
$mark = abs($num_show - $num_answer);

switch($mark) {
    case 0:
        $mark = 'Оличный результат!!!';
        break;
    case 1:
        $mark = 'Совсем неплохо';
        break;
    case 2:
        $mark = 'Можно и лучше';
        break;
    default:
        $mark = 'Никуда не годится';
}

if(!empty($_COOKIE['user'])) {
    $user = unserialize($_COOKIE['user']);
    //add id show words
    if(empty($user['words_id'])) $user['words_id'] = $_COOKIE['words_id_test'];
    else $user['words_id'] = $user['words_id'].','.$_COOKIE['words_id_test'];
    $user['count_test'] = $user['count_test'] + 1;
    updateUser($user, $pdo);
    $user = serialize($user);
    setcookie ("user", $user);
    setcookie('words_id_test', '');
}


require_once 'view/report_view.php';
