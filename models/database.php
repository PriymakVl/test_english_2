<?php

$db_options =  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,//PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'');
                                
$pdo = new PDO('mysql:host=localhost; dbname=english', 'root', '', $db_options);