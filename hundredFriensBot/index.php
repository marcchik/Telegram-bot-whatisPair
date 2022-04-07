<?php
define('TOKEN', '5059697070:AAHqA2OKPfTQt2YGnTz66W8irbyRmFq29Ow');

// входной массив
$data = json_decode(file_get_contents('php://input'), TRUE);

$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];

//пишем в файл лог сообщений
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);

// входное сообщение
$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');

// массив вошедших пользователей
$usersArray = array();

// получаем данные из JSON файла
$ourData = file_get_contents("USERS.json");

// Преобразуем в массив
$usersArray = json_decode($ourData, true);


$currentUser = array();

// id пользователя в кодировке
$id = base64_encode($data['from']['username']);

// сгенерированный массив нового пользователя
$currentUser[$id]['profile']['name'] = $data['from']['first_name'];
$currentUser[$id]['profile']['username'] = $data['from']['username'];
$currentUser[$id]['chat']['id'] = $data['chat']['id'];
$currentUser[$id]['chat']['type'] = $data['chat']['type'];

$first_name = $data['from']['first_name'];

switch ($message) {
    case '/invite':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Отправь ссылку другу 
t.me/hundredFriensBot?start=$id",
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 't.me/hundredFriensBot'],
                    ]
                ]
            ]
        ];
        break;
    case '/help':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Привет, **$first_name**, вот команды, что я понимаю: 
    /help - Список команд
    /about - О нас
    /invite - Пригласить друга
             ",
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Пока!'],
                    ]
                ]
            ]
        ];
        break;
    case '/about':
        $method = 'sendMessage';
        $send_data = [
            'text' => 'hundredFriendsBot - бот, с помощью которого
    Ты сможешь накопить на мечту!',
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Понятно!'],
                    ]
                ]
            ]
        ];
        break;
    case '/start':
        $method = 'sendMessage';
        $send_data = [
            'text' => 'Теперь ты с нами!',
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ага!'],
                    ]
                ]
            ]
        ];
        break;
    case 'отправь ссылку другу':
        $method = 'sendMessage';
        $send_data = [
            'text' => 't.me/hundredFriensBot',
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Спасибо!'],
                    ]
                ]
            ]
        ];
        break;
    default:
        $method = 'sendMessage';
        $send_data = [
            'text' => 'Что вы хотите узнать?',
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ничего'],
                    ]
                ]
            ]
        ];



}

$send_data['chat_id'] = $data['chat']['id'];

$res = sendTelegram($method, $send_data);


echo "<pre>";
file_put_contents('data.json', json_encode($data, JSON_UNESCAPED_UNICODE));
echo "</pre><hr>";

function sendTelegram($method, $data, $headers = [])
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.telegram.org/bot' . TOKEN . '/' . $method,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array_merge(array("Content-Type: application/json"))
    ]);
    $result = curl_exec($curl);
    curl_close($curl);
    return (json_decode($result, 1) ? json_decode($result, 1) : $result);
}


function sendAll($array, $message) {
    foreach ($array as $item) {
        echo "<pre>";
        print_r($item['chat']['id']);
        echo "</pre><hr>";

        $send_data['chat_id'] = $item['chat']['id'];
        $send_data['text'] = $message;

        sendTelegram('sendMessage', $send_data);
    }
}

//sendAll($usersArray, "Hi");



if (strlen($currentUser[$id]['profile']['username']) > 1) {
    // проверка на существование такого пользователя
    foreach ($usersArray as $key => $item) {
        if (strcasecmp($key, $currentUser[$id]['profile']['username']) == 0) {
            return;
        } else {
            file_put_contents('USERS.json', json_encode($usersArray, JSON_UNESCAPED_UNICODE));
        }
    }
}
?>