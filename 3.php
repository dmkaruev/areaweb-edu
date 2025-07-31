<?php

// Массивы
$array = [
    'Иван', 2025, false
];

$users = [
    [
        "name" => "Иван",
        "surname" => "Иванов",
        "age" => 23,
        "skill" => [
            "PHP", "HTML", "CSS", "JS"
        ],
    ],
    [
        "name" => "Дмитрий",
        "surname" => "Петров",
        "age" => 10,
        "skill" => [
            "Go"
        ],
    ],
    [
        "name" => "Вафел",
        "surname" => "Ебунов",
        "age" => 15,
        "skill" => [
            "HTML", "CSS"
        ],
    ],
];

$config = [
    "key" => "1",
    "url" => "https://vk.com/ekaterinaefimova92",
    "ssl" => true,
    "db" => [
        "port" => 80,
        "host" => "vk.com",
        "login" => "root",
        "password" => "1234567890",
    ],
];
$config['db']['port'] = 3309;

echo '<pre>';
print_r($config);
echo '</pre>';
echo $config['db']['port'];
?>