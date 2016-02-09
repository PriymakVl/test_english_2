<?php

require_once 'models/model_words.php';
require_once 'lib.php';

$user_display = null;

$length_test = 5;

if(isset($_GET['auth'])) $error_auth = 'Вы указали неправилтный логин или пароль';
else $error_auth = false;

if(!empty($_COOKIE['user'])) {
    $user = unserialize($_COOKIE['user']);
    $count_words = $user['count_test'] * $length_test;
}
else $user = null;

//if user not auth hide table info user
if(!$user) $user_display = 'style="display:none"';

//numbers variant words
$variants = 5;

$words = getRandomWords($user['words_id'], $variants, $pdo);

//trim the lenth of the words
for ($i = 0, $count = count($words); $i < $count; $i++) {
    if(strlen($words[$i]['rus']) > 25) {
        $words[$i]['rus'] = substr($words[$i]['rus'], 0, 30).'...';
    }
}

//randow key rus of the word
$num_check = rand(0, 4);

//statistics test
$show_words = isset($_GET['show']) ? $_GET['show'] + 1 : 1;
$remain_words = $length_test - $show_words;
$num_answers = isset($_GET['answers']) ? $_GET['answers'] : 0;


require_once 'view/main_view.php';

