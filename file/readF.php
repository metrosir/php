<?php

//读取文件
function readF($path_name)
{
	$handle = fopen($path_name, 'r');
	while (!feof($handle)) {
		$line = fgets($handle);
		echo $line;
	}
	fclose($handle);
}

$path_name = __DIR__ . '/' . basename(__FILE__);
readF($path_name);