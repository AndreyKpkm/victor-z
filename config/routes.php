<?php

return array(
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
//    'news' => 'news/index',   // actionIndex в NewsController
//    'news/([0-9]+)' => 'news/view', // actionView в NewsController

    'products' => 'product/list',   // actionList в ProductController
    'pages' => 'pages/page',
);