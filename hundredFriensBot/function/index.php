<?php

include "./isConnect/index.php";
include "./infoDB/index.php";



$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];


//echo $_SERVER['REQUEST_URI'];

function isConnect() {
    return (bool)connect(DB_CONNECTION);
}

function addUserBD($id, $name, $last_name, $chat_id, $chat_type, $referral) {
    if (!empty($id) && !empty($name) && !empty($last_name) && !empty($chat_id) && !empty($chat_type) && !empty($referral)) {
        $link = connect(DB_CONNECTION);
        $sql = "INSERT INTO `USERS_TG` (`ID`, `NAME`, `LASTNAME`, `CHAT_ID`, `CHAT_TYPE`, `REFERRAL`) VALUES ('".$id."', '".$name."', '".$last_name."', '".$chat_id."', '".$chat_type."', '".$referral."')";
    } else
        return 0;
    return (mysqli_query($link, $sql)) ? 1 : 0;
}

function isExistUser($id) {
    $link = connect(DB_CONNECTION);
    $sql = "SELECT `ID` FROM `USERS_TG` WHERE ID = " + $id;
    return mysqli_query($link, $sql);

}

function adUserDB($currentUser) {
    if(!isExistUser($currentUser['id'])) {
        addUserBD($currentUser['id'], $currentUser['name'], $currentUser['last_name'], $currentUser['chat_id'], $currentUser['chat_type'], $currentUser['referral']);
    }
}

function getId($username) {
    return base64_encode($username);
}

function createCurrentUser($data) {
    // сгенерированный массив нового пользователя
    $currentUser['id'] = getId($data['from']['username']);
    $currentUser['name'] = $data['from']['first_name'];
    $currentUser['last_name'] = $data['from']['last_name'];
    $currentUser['username'] = $data['from']['username'];
    $currentUser['chat_id'] = $data['chat']['id'];
    $currentUser['chat_type'] = $data['chat']['type'];
    $currentUser['referral'] = 'bWFyY2NoaWs=';
    return $currentUser;
}

