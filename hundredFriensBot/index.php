<?php
define('TOKEN', '5059697070:AAHqA2OKPfTQt2YGnTz66W8irbyRmFq29Ow');
include "./function/index.php";

$data = getData();

//пишем в файл лог сообщений
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);

$command = ($data['text'] ? $data['text'] : $data['data']);

// входное сообщение
$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');

$usersArray = getUsers('USERS');

// id пользователя в кодировке
$id = base64_encode($data['from']['username']);

$currentUser = getCurrentUser($id, $data);

$first_name = $data['from']['first_name'];
$chat_id = $data['chat']['id'];

$referral_id = 'bWFyY2NoaWs=';


if (mb_substr($message, 0, 7) == "/start ") {
    $referral_id = mb_substr($command, 7);
    $message = '/referral';
}

echo isConnect();

switch ($message) {
    case '/invite':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Отправь ссылку другу 
t.me/hundredFriensBot?start=$id",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Вернуться'],
                    ]
                ]
            ]
        ];
        break;
    case '/referral':
        $method = 'sendMessage';

        $currentUser = setReferralID($referral_id, $currentUser, $id);

        adUser($id, $usersArray, $currentUser);
        $send_data = [
            'text' => "Поздравляю! Теперь Вы с нами!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case 'ad':
        $method = 'sendMessage';

        adUserDB(createCurrentUser($data));
        $send_data = [
            'text' => "Добавлен",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case '/play_rpc':
        $method = 'sendMessage';
        playRPC($id, $chat_id, $usersArray);
        $send_data = [
            'text' => "Игра начнется через 3️⃣!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Закончить игру'],
                    ]
                ]
            ]
        ];
        break;
    case 'закончить игру':
        $method = 'sendMessage';
        endRPC($id, $chat_id, $usersArray);
        $send_data = [
            'text' => "Игра окончена",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Назад'],
                    ]
                ]
            ]
        ];
        break;
    case '1🍒':
        $method = 'sendMessage';
        refillBalance(1, $id, $usersArray);
        $send_data = [
            'text' => "Вы успешно пополнили свой баланс!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case '10🍒':
        $method = 'sendMessage';
        refillBalance(10, $id, $usersArray);
        $send_data = [
            'text' => "Вы успешно пополнили свой баланс!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case '100🍒':
        $method = 'sendMessage';
        refillBalance(100, $id, $usersArray);
        $send_data = [
            'text' => "Вы успешно пополнили свой баланс!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case '1000🍒':
        $method = 'sendMessage';
        refillBalance(1000, $id, $usersArray);
        $send_data = [
            'text' => "Вы успешно пополнили свой баланс!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Ура'],
                    ]
                ]
            ]
        ];
        break;
    case '/refillbalance':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Введите сумму пополнения!",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => '1🍒'],
                        ['text' => '10🍒']
                    ],
                    [
                        ['text' => '100м🍒'],
                        ['text' => '1000🍒']
                    ]
                ]
            ]
        ];
        break;
    case 'пополнить кошелек':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Введите сумму пополнения",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => '1🍒'],
                        ['text' => '10🍒']
                    ],
                    [
                        ['text' => '100🍒'],
                        ['text' => '1000🍒']
                    ]
                ]
            ]
        ];
        break;
    case '/balance':
        $method = 'sendMessage';
        $amount = isset($usersArray[$id]['wallet']['amount']) ? $usersArray[$id]['wallet']['amount'] : "0";
        $send_data = [
            'text' => "Ваш баланс - ".$amount."🍒",
            'reply_markup' => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Спасибо'],
                        ['text' => 'Пополнить кошелек']
                    ]
                ]
            ]
        ];
        break;
    case '/help':
        $method = 'sendMessage';
        $send_data = [
            'parse_mode' => 'HTML',
            'text' => "Привет, <u><b>$first_name</b></u>, вот команды, что я понимаю: 
    /help - Список команд
    /about - О нас
    /invite - Пригласить друга
    /balance - Мой баланс
    /refillbalance - Пополнить баланс",
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
    case '/myreferrals':
        $method = 'sendMessage';
        $send_data = [
            'text' => 'Всего '.listReferral($id, $chat_id, $usersArray),
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

        adUser($id, $usersArray, $currentUser);
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
    default:
        $method = 'sendMessage';
        $send_data = [
            'text' => 'Что вы хотите узнать?',
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => '/help'],
                        ['text' => '/about']
                    ],
                    [
                        ['text' => '/invite'],
                        ['text' => '/balance']
                    ],
                    [
                        ['text' => '/refillbalance'],
                        ['text' => '/settings']
                    ]
                ]
            ]
        ];



}



$send_data['chat_id'] = $data['chat']['id'];

$res = sendTelegram($method, $send_data);



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

function refillBalance($amount, $id, $array) {
    $array[$id]['wallet']['amount'] += $amount;
    file_put_contents('USERS.json', json_encode($array, JSON_UNESCAPED_UNICODE));
}

function listReferral($id, $chat_id, $users) {

    $send_data = [
        'text' => 'Список ваших рефералов',
        'chat_id' => $chat_id
    ];

    $count = 0;
    sendTelegram('sendMessage', $send_data);

    foreach ($users as $key => $item) {
        if (strcasecmp($id, $item['referral']['parent']) == 0) {
            $referral = "\n".($count + 1).") ".$item['profile']['name']." (".$item['profile']['username'].")";
            $send_data['text'] = $send_data['text'].$referral;
            $count++;
        }
    }
    sendTelegram('sendMessage', $send_data);

    return $count;
}

function playRPC($id, $chat_id, $users) {

    $users[$id]['games']['status'] = 'search';

    file_put_contents('USERS.json', json_encode($users, JSON_UNESCAPED_UNICODE));

    $send_data = [
        'text' => 'Список активных игроков',
        'chat_id' => $chat_id
    ];

    sendTelegram('sendMessage', $send_data);

    foreach ($users as $key => $item) {
        if (strcasecmp('search', $item['games']['status']) == 0 && $key != $id) {
            $send_data['text'] = "Ваш соперник -  ".$item['profile']['name']." (".$item['profile']['username'].")";
            sendTelegram('sendMessage', $send_data);

            $send_data = [
                'text' => 'Ваш соперник - '.$users[$id]['profile']['name']." (".$users[$id]['profile']['username'].")",
                'chat_id' => $item['chat']['id']
            ];
            sendTelegram('sendMessage', $send_data);
            break;
        }
    }
}

function endRPC($id, $chat_id, $users) {

    $users[$id]['games']['status'] = 'end';

    file_put_contents('USERS.json', json_encode($users, JSON_UNESCAPED_UNICODE));

}



function changeInfo($id, $newdata) {
    // получаем данные из JSON файла
    $ourData = file_get_contents("USERS.json");

    // Преобразуем в массив
    $usersArray = json_decode($ourData, true);

    $new = array();

    $new[$id]['wallet']['amount'] = $newdata;

    $usersArray[$id]['wallet']['amount'] = $new[$id]['wallet']['amount'];

    file_put_contents('USERS22.json', json_encode($usersArray, JSON_UNESCAPED_UNICODE));
}

function getData() {

    $data = json_decode(file_get_contents('php://input'), TRUE);

    return $data['callback_query'] ? $data['callback_query'] : $data['message'];
}

function getUsers($fileName) {
    // получаем данные из JSON файла
    $ourData = file_get_contents("$fileName.json");

    // Преобразуем в массив
    return json_decode($ourData, true);
}

function getCurrentUser($id, $data) {
    // сгенерированный массив нового пользователя
    $currentUser[$id]['profile']['name'] = $data['from']['first_name'];
    $currentUser[$id]['profile']['surname'] = $data['from']['last_name'];
    $currentUser[$id]['profile']['username'] = $data['from']['username'];
    $currentUser[$id]['chat']['id'] = $data['chat']['id'];
    $currentUser[$id]['chat']['type'] = $data['chat']['type'];
    $currentUser[$id]['wallet']['amount'] = '0';
    $currentUser[$id]['referral']['parent'] = 'bWFyY2NoaWs=';

    return $currentUser;
}

function setReferralID($referralID, $currentUser, $id) {
    $currentUser[$id]['referral']['parent'] = $referralID;

    return $currentUser;
}
?>