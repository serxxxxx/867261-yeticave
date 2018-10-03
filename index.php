<?php
$is_auth = rand(0, 1);

$user_name = ''; // укажите здесь ваше имя
$user_avatar = 'img/user.jpg';
$categories = ["Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное"];
$product = [
    [
    'name' => '2014 Rossignol District Snowboard',
    'categories' => 'Доски и лыжи',
    'cost' => 10999,
    'URL' => 'img/lot-1.jpg'
    ],
    [
    'name' => 'DC Ply Mens 2016/2017 Snowboard',
    'categories' => 'Доски и лыжи',
    'cost' => 159999,
    'URL' => 'img/lot-2.jpg'
    ],
    [
    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
    'categories' => 'Крепления',
    'cost' => 8000,
    'URL' => 'img/lot-3.jpg'
    ],
    [
    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'categories' => 'Ботинки',
    'cost' => 10999,
    'URL' => 'img/lot-4.jpg'
    ],
    [
    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
    'categories' => 'Одежда',
    'cost' => 7500,
    'URL' => 'img/lot-5.jpg'
    ],
    [
    'name' => 'Маска Oakley Canopy',
    'categories' => 'Разное',
    'cost' => 5400,
    'URL' => 'img/lot-6.jpg'
    ]
    ];

  require_once("functions.php");

  $page_content = include_template('index.php', ['categories' => $categories,'product' => $product,]);
  $layout_content = include_template('layout.php',
    [
  	   'main' => $page_content,
       'categories' => $categories,
  	   'title' => "Интернет-аукцион",
       'is_auth' => $is_auth
    ]);

  print($layout_content);



?>
