<?php

include "./isConnect/index.php";
include "./infoDB/index.php";

define('DB_CONNECTION', $connection_string = [
    'hostname' => 'localhost:3306',
    'username' => 'yourpres_admin',
    'password' => 'M52502002s',
    'database' => 'yourpres_ORDERLAB'
]);

function connect($array) {
    return mysqli_connect($array['hostname'], $array['username'], $array['password'], $array['database']);
}

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
    $sql = "SELECT `ID` FROM `USERS_TG` WHERE ID = {$id}";
    return mysqli_query($link, $sql)->num_rows > 0;
}

function getUser($id) {
    $link = connect(DB_CONNECTION);
    $sql = "SELECT `ID`, `NAME`, `LASTNAME`, `CHAT_ID`, `CHAT_TYPE`, `REFERRAL` FROM `USERS_TG` WHERE ID = ".$id;
    $result = mysqli_query($link, $sql);

    $array= array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    } else {
        $array = null;
    }

    return json_encode(["response" => $array], JSON_UNESCAPED_UNICODE);
}

function adUserDB($currentUser) {
    if(!isExistUser($currentUser['id'])) {
        addUserBD($currentUser['id'], $currentUser['name'], $currentUser['last_name'], $currentUser['chat_id'], $currentUser['chat_type'], $currentUser['referral']);
    }
}

function addUser($id, $name, $username, $referral, $password) {
    if(!isExistUser($id)) {
        if (!empty($id) && !empty($name) && !empty($username) && !empty($referral) && !empty($password)) {
            $link = connect(DB_CONNECTION);
            $sql = "INSERT INTO `USERS_TG` (`ID`, `NAME`, `USERNAME`, `REFERRAL`, `PASSWORD`) VALUES ('".$id."', '".$name."', '".$username."', '".$referral."', '".passHash($password)."')";
        } else
            return 0;
        return (mysqli_query($link, $sql)) ? 1 : 0;
    }
}



function getId($username) {
    return base64_encode($username);
}

function passHash($pass) {
    return md5($pass);
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

