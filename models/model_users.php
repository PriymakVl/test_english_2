<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Priymak
 * Date: 06.02.2016
 * Time: 12:12
 */

require_once 'database.php';

function getUser($login, $pass, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `login` = :login AND `pass` = :pass LIMIT 1");
    $stmt->execute(array(':login' => $login, ':pass' => $pass));
    return $stmt->fetch();
}

function updateUser($user, $pdo) {
    $stmt = $pdo->prepare("UPDATE `users` SET `count_test` = :count, `words_id` = :words WHERE `id` = :user_id" );
    return $stmt->execute(array(':count' => $user['count_test'], ':words' => $user['words_id'], ':user_id' => $user['id']));
}

function setUser($login, $pass, $pdo) {
    $stmt = $pdo->prepare("INSERT INTO `users` SET `login` = :login, `pass` = :pass");
    return $stmt->execute(array(':login' => $login, ':pass' => $pass));
}

function getLeaders ($pdo) {
    $stmt = $pdo->query("SELECT `login`, `count_test` FROM `users` ORDER BY `count_test` DESC LIMIT 3");
    return $stmt->fetchAll();
}