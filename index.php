<?php

$title = 'Главная';
$is_auth = (bool)rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Другое"];

$winterProduct = [

    ['title' => '2014 Rossignol District Showboard ',
        'category' => 'skiboards',
        'price' => '10999',
        'urlpics' => 'img/lot-1.jpg'
    ],
    ['title' => 'DC Ply Mens 2016/2017 Showboard',
        'category' => 'skiboards',
        'price' => '159999',
        'urlpics' => 'img/lot-2.jpg',
    ],
    ['title' => 'Крепление Union Contact pro 2015 года размер L/XL',
        'category' => 'mounts',
        'price' => '8000',
        'urlpics' => 'img/lot-3.jpg'
    ],
    ['title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'boots',
        'price' => '10999',
        'urlpics' => 'img/lot-4.jpg'
    ],
    ['title' => 'Кутрка для сноуборда DC Mutiny Charocal',
        'category' => 'clothing',
        'price' => '7500',
        'urlpics' => 'img/lot-5.jpg',
    ],
    ['title' => 'Маска Qakley Canopy',
        'category' => 'another',
        'price' => '5400',
        'urlpics' => 'img/lot-6.jpg'
    ]
];


function cost($a)
{
    $a= ceil($a);
    if (1000 <= $a) {
        $a = number_format($a, 0, '', ' ');
    }

    return $a . " ";
}




require_once 'functions.php';

$page_content = include_template('main.php', ['winterProduct' => $winterProduct, 'categories' => $categories]);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => $title,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'categories' => $categories
]);


print($layout_content);



$page_content = include_template('main.php',['categories=>$categories','winterProduct=>$winterProduct']);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => $title,
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'categories' => $categories
]);


print($layout_content);
