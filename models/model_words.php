<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Priymak
 * Date: 06.02.2016
 * Time: 11:53
 */

require_once 'database.php';
require_once 'lib.php';

function getRandomWords($ids, $limit, $pdo) {
    if($ids) {
        $sql = "select * from words where `id` not in($ids) order by rand() limit $limit";
        $stmt = $pdo->query($sql);
    }
    else {
        $sql = "SELECT * FROM `words` ORDER BY rand() LIMIT $limit";
        $stmt = $pdo->query($sql);;
    }
    return $stmt->fetchAll();
}