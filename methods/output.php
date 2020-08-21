<?php

$datas = array(
	array(1, 'りんご', 100),
	array(2, 'みかん', 150),
	array(3, 'いちご', 300)
);

$fp = fopen('data.csv', 'w');

foreach ($datas as $data) {

	$line = implode(',', $data);
	fwrite($file_path, $line . "\n");
}

fclose($file_path);
