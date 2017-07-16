<?php
if($_SERVER['X-Hub-Signature'] == 'sha1=ab7e41eb1e0fad2227cf2b399b4249c023fd42ba')
{
	$text = "Какой-то текст";
 
	// открываем файл, если файл не существует,
	//делается попытка создать его
	$fp = fopen("file.txt", "w");
	 
	// записываем в файл текст
	fwrite($fp, $text);
	 
	// закрываем
	fclose($fp);
}
?>