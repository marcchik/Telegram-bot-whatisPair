

<?php
date_default_timezone_set( 'Russia/Moscow' );
$callTime = array(
    '1' => array(
        'start' => array(
            'hours' => "08",
            'minutes' => "00"
        ),
        'end' => array(
            'hours' => "09",
            'minutes' => "20"
        ),
    ),
    '2' => array(
        'start' => array(
            'hours' => "09",
            'minutes' => "35"
        ),
        'end' => array(
            'hours' => "10",
            'minutes' => "55"
        ),
    ),
    '3' => array(
        'start' => array(
            'hours' => "11",
            'minutes' => "25"
        ),
        'end' => array(
            'hours' => "12",
            'minutes' => "45"
        ),
    ),
    '4' => array(
        'start' => array(
            'hours' => "13",
            'minutes' => "00"
        ),
        'end' => array(
            'hours' => "14",
            'minutes' => "20"
        ),
    )
);

$startDat = strtotime(date('Y-m-d')  ." ". $callTime['1']['start']['hours'].":".$callTime['1']['start']['minutes']);




$scheduleArray = array(

    '1' => array(
        '1' => array(
            '1' => 'Сервера',
            '2' => 'Флатер',
            '3' => 'ПОБМС'
        ),
        '2' => array(
            '1' => 'ПОБМС',
            '2' => 'Интернет'
        ),
        '3' => array(
            '1' => 'Первой пары нету',
            '2' => 'Крипта',
            '3' => 'ПОБМС',
            '4' => 'Физра'
        )
    ),

    '2' => array(
        '1' => array(
            '1' => 'Сервера',
            '2' => 'Флатер',
            '3' => 'Право'
        ),
        '2' => array(
            '1' => 'Крипта',
            '2' => 'Интернет'
        )
    )
);



$weekNumber = 0;
$dayNumber = 0;
$pairNumber = 0;

$startDate = strtotime("13 March 2022");

$now = strtotime("now");

$difference = $now - $startDate;

$dayNumber = ($difference / 60 / 60 /24) % 7;


if (round($difference / 60 / 60 /24 / 7) % 2 === 0)
    $weekNumber = 1;
else
    $weekNumber = 2;




if ( $now >= strtotime(date('Y-m-d')  ." ". $callTime['1']['start']['hours'].":".$callTime['1']['start']['minutes']) &&
        $now <= strtotime(date('Y-m-d')  ." ". $callTime['1']['end']['hours'].":".$callTime['1']['end']['minutes']) )
    $pairNumber = 1;

    elseif ( $now >= strtotime(date('Y-m-d')  ." ". $callTime['2']['start']['hours'].":".$callTime['2']['start']['minutes']) &&
                $now <= strtotime(date('Y-m-d')  ." ". $callTime['2']['end']['hours'].":".$callTime['2']['end']['minutes']) )
        $pairNumber = 2;

        elseif ( $now >= strtotime(date('Y-m-d')  ." ". $callTime['3']['start']['hours'].":".$callTime['3']['start']['minutes']) &&
                    $now <= strtotime(date('Y-m-d')  ." ". $callTime['3']['end']['hours'].":".$callTime['3']['end']['minutes']) )
            $pairNumber = 3;

                elseif ( $now >= strtotime(date('Y-m-d')  ." ". $callTime['4']['start']['hours'].":".$callTime['4']['start']['minutes']) &&
                            $now <= strtotime(date('Y-m-d')  ." ". $callTime['4']['end']['hours'].":".$callTime['4']['end']['minutes']) )
                            $pairNumber = 4;

                            elseif ($now <= strtotime(date('Y-m-d')  ." ". $callTime['1']['start']['hours'].":".$callTime['1']['start']['minutes']) ||
                                        $now >= strtotime(date('Y-m-d')  ." ". $callTime['4']['end']['hours'].":".$callTime['4']['end']['minutes']) )
                                $pairNumber = "вы сейчас не на паре";

                                else
                                    $pairNumber = "у вас перерыв";


if (is_numeric($pairNumber))
    $text = $scheduleArray[$weekNumber][$dayNumber][$pairNumber];
else
    $text = $pairNumber;



echo "неделя - ".$weekNumber.", день - ".$dayNumber." пара - ".$pairNumber;




$data = json_decode(file_get_contents('php://input'), TRUE);

//пишем в файл лог сообщений
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);

$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];

define('TOKEN', '5263663074:AAE4VX8yOGwG6ERaMRWwSOU92wRmtKiNobI');

$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');

file_put_contents('message.txt', 'message: '.$message."\n", FILE_APPEND);


switch ($message) {
    case 'пара':
        $method = 'sendMessage';
        $send_data = [
            'text' => $text,
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => '/start'],
                    ]
                ]
            ]
        ];
        break;
    case 'расписание':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Какая сейчас неделя?",
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Первая'],
                        ['text' => 'Вторая'],
                    ]
                ]
            ]
        ];
        break;
    case 'первая':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Какой сейчас день недели?",
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Понедельник'],
                        ['text' => 'Вторник'],
                        ['text' => 'Среда']
                    ],
                    [
                        ['text' => 'Четверг'],
                        ['text' => 'Пятница'],
                        ['text' => 'Суббота']
                    ]
                ]
            ]
        ];
        break;

    case 'вторая':
        $method = 'sendMessage';
        $send_data = [
            'text' => "Какой сейчас день недели?",
            'reply_markup'  => [
                'resize_keyboard' => true,
                'keyboard' => [
                    [
                        ['text' => 'Понедельник2'],
                        ['text' => 'Вторник2'],
                        ['text' => 'Среда2']
                    ],
                    [
                        ['text' => 'Четверг2'],
                        ['text' => 'Пятница2'],
                        ['text' => 'Суббота2']
                    ]
                ]
            ]
        ];
        break;

    case 'понедельник':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Сервера\n2. 9:35 - 10:55 Флатер\n3. 11:25 - 12:45 ПОБМС",
        ];
        break;

    case 'вторник':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 ПОБМС\n2. 9:35 - 10:55 Интернет",
        ];
        break;

    case 'среда':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 -\n2. 9:35 - 10:55 Крипта\n3. 11:25 - 12:45 ПОБМС\n4. 13:00 - 14:20 Физра",
        ];
        break;

    case 'четверг':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Флатер\n2. 9:35 - 10:55 Интернет\n3. 11:25 - 12:45 ПОБМС",
        ];
        break;

    case 'пятница':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Право\n2. 9:35 - 10:55 Сервера\n3. 11:25 - 12:45 Крипта",
        ];
        break;

    case 'суббота':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 -\n2. 9:35 - 10:55 Физра\n3. 11:25 - 12:45 Безопасность\n4. 13:00 - 14:20 Безопасность",
        ];
        break;

    case 'понедельник2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Сервера\n2. 9:35 - 10:55 Флатер\n3. 11:25 - 12:45 Право",
        ];
        break;

    case 'вторник2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Крипта\n2. 9:35 - 10:55 Интернет",
        ];
        break;

    case 'среда2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 -\n2. 9:35 - 10:55 Крипта\n3. 11:25 - 12:45 ПОБМС\n4. 13:00 - 14:20 Физра",
        ];
        break;

    case 'четверг2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Флатер\n2. 9:35 - 10:55 Интернет\n3. 11:25 - 12:45 ПОБМС",
        ];
        break;

    case 'пятница2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 Право\n2. 9:35 - 10:55 Сервера\n3. 11:25 - 12:45 Крипта",
        ];
        break;

    case 'суббота2':
        $method = 'sendMessage';
        $send_data = [
            'text' => "1. 08:00 - 09:20 -\n2. 9:35 - 10:55 Физра\n3. 11:25 - 12:45 Безопасность\n4. 13:00 - 14:20 Безопасность",
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
                        ['text' => 'Расписание'],
                        ['text' => 'Пара'],
                    ]
                ]
            ]
        ];



}

$send_data['chat_id'] = $data['chat'] ['id'];

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

?>