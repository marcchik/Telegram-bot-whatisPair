<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<pre>




<?php
$name = "Mark";
$file = file_get_contents('data.json');  // Открыть файл data.json

$taskList = json_decode($file,TRUE);        // Декодировать в массив

unset($file);                               // Очистить переменную $file



$scheduleArray = array(

    '1' => [
        'name' => 'Mark',
        'password' => '1111'
    ],
    '2' => [
        'name' => 'Mark',
        'password' => '1111'
    ],
    '3' => [
        'name' => 'Mark',
        'password' => '1111'
    ],


);

$taskList[] = array('name'=>$name);        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'

file_put_contents('data.json',json_encode($scheduleArray));  // Перекодировать в формат и записать в файл.

unset($taskList);
?>