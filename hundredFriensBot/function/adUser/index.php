<?php
include "../infoDB/index.php";
include "../index.php";

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$last_name = $_REQUEST['last_name'];
$chat_id = $_REQUEST['chat_id'];
$chat_type = $_REQUEST['chat_type'];
$referral = $_REQUEST['referral'];

echo addUserBD($id, $name, $last_name, $chat_id, $chat_type, $referral);