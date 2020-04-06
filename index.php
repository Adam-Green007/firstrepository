<?php

date_default_timezone_set("Europe/Moscow");

$intEnd  = '8 April 2020';   //вычисляем время до конца лота
$ts = time();
$andTs = strtotime($intEnd);
$sum = $andTs-$ts;
$hours = floor ($sum / 3600);
$minute = floor(($sum % 3600)/60);

$time= ($hours .':'. $minute);



$title = 'Главная';
$is_auth = (bool)rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Другое"];

$winterProduct = [

    ['title' => '2014 Rossignol District Showboard ',
        'category' => 'skiboards',
        'price' => '10999',
        'urlpics' => 'img/lot-1.jpg',
        'time'=>$time,
    ],
    ['title' => 'DC Ply Mens 2016/2017 Showboard',
        'category' => 'skiboards',
        'price' => '159999',
        'urlpics' => 'img/lot-2.jpg',
        'time'=>$time,
    ],
    ['title' => 'Крепление Union Contact pro 2015 года размер L/XL',
        'category' => 'mounts',
        'price' => '8000',
        'urlpics' => 'img/lot-3.jpg',
        'time'=>$time,
    ],
    ['title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'boots',
        'price' => '10999',
        'urlpics' => 'img/lot-4.jpg',
        'time'=>$time,
    ],
    ['title' => 'Кутрка для сноуборда DC Mutiny Charocal',
        'category' => 'clothing',
        'price' => '7500',
        'urlpics' => 'img/lot-5.jpg',
        'time'=>$time,
    ],
    ['title' => 'Маска Qakley Canopy',
        'category' => 'another',
        'price' => '5400',
        'urlpics' => 'img/lot-6.jpg',
        'time'=>$time,
    ]
];



function cost($a)         // Функция отделения цены
{
    $a= ceil($a);
    if (1000 <= $a) {
        $a = number_format($a, 0, '', ' ');
    }

    return $a . " ";
}




require_once 'functions.php'; //вызвали функцию

$page_content = include_template('main.php', ['winterProduct' => $winterProduct, 'categories' => $categories]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => $title,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'categories' => $categories
]);

print ($layout_content);
