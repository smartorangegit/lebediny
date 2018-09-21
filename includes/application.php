<?php

//print_r($_POST);
//echo 'success';



//print_r($_POST); //email

$today = date("Y-m-d H:i:s");
//print_r($today);
$count = file("simple-feed.txt");
//echo 'Количество строк в файле: '.count($count);
if($_POST['tel'] && $_POST['name']) {
    $fp = fopen("simple-feed.txt", "a"); // Открываем файл в режиме записи
    $mytext = (count($count) + 1) . ' Дата - ' . $today . ' Name - ' . $_POST['name'] . ' Tel - ' . $_POST['tel'] . "\r\n"; // Исходная строка
}
else{
    $er = ' - введите почту';
}
$test = fwrite($fp, $mytext); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл'.$er;
fclose($fp); //Закрытие файла