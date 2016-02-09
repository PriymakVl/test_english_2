<?php

require_once 'database.php';
require_once 'lib.php';
require_once 'HendlerFile.php';


$obj = new HendlerFile('words5.txt');
$words = $obj->getArrayStringFromFile()->getArrayFromArrayString('eng', 'rus', ';');

foreach ($words as $word) {
	$sql = 'INSERT INTO `words2` (`rus`, `eng`) VALUES (?, ?)';
	$params = array($word['rus'], $word['eng']);
	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);	
}

echo 'words add in database';
// print_arr($words);


