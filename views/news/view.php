<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Culinary by free css templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/template/css/style.css">
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Culinary</a></h1>
            <h2><a href="http://www.freecsstemplates.org/">Template by free css templates</a></h2>
        </div>
        <!-- end div#logo -->
    </div>
    <!-- end div#header -->
    <div id="menu">
        <ul>
            <li class="active"><a href="#">Главная</a></li>
            <li><a href="#">Товары</a>
            <li><a href="#">О нас</a></li>
            <li><a href="/news">Новости</a></li>
            <li><a href="#">Контакты</a>
        </ul>
    </div>
    <!-- end div#menu -->
    <div id="page">
        <div id="page-bgtop">
            <div id="content">

                <div class="post">
                    <h2 class="title"><a href="/news/<?= $newsItem['id'] ?>"><?= $newsItem['title'] ?></a></h2>
                    <p class="byline"><?= $newsItem['date'] ?></p>
                    <div class="entry">
                        <p><?= $newsItem['content'] ?></p>
                    </div>
                </div>

                <div class="meta">
                    <p class="links"><a href="#" class="comments">Comments (32)</a></p>
                </div>
            </div>
        </div>

        <!-- end div#content -->
        <div id="sidebar">
            <ul>
                <li id="search">
                    <h2 class="search">Search</h2>
                    <form method=get action=>
                        <fieldset>
                            <input type="text" id="search-text" name="s" value="">
                            <input type="submit" id="search-submit" value="search">
                        </fieldset>
                    </form>
                </li>
                <li>
                    <h2 class="categories">Lorem ipsum</h2>
                    <ul>
                        <li><a href="#">Fusce dui neque fringilla</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a>
                        <li><a href="#">Nec metus sed donec</a>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a>
                        <li><a href="#">Eget tempor eget nonummy</a>
                    </ul>
                </li>
                <li>
                    <h2>Volutpat dolore</h2>
                    <ul>
                        <li><a href="#">nec metus sed donec</a>
                        <li><a href="#">magna lacus bibendum mauris</a></li>
                        <li><a href="#">velit semper nisi molestie</a>
                        <li><a href="#">eget tempor eget nonummy</a></li>
                        <li><a href="#">nec metus sed donec</a>
                        <li><a href="#">magna lacus bibendum mauris</a>
                        <li><a href="#">velit semper nisi molestie</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Bebindum mauris </h2>
                    <ul>
                        <li><a href="#">nec metus sed donec</a>
                        <li><a href="#">magna lacus bibendum mauris</a></li>
                        <li><a href="#">velit semper nisi molestie</a></li>
                        <li><a href="#">eget tempor eget nonummy</a>
                        <li><a href="#">nec metus sed donec</a>
                        <li><a href="#">velit semper nisi molestie</a>
                        <li><a href="#">eget tempor eget nonummy</a></li>
                        <li><a href="#">velit semper nisi molestie</a>
                    </ul>

            </ul>
        </div>
        <!-- end div#sidebar -->
        <div style="clear: both; height: 1px"></div>


        <!-- end div#page -->
        <div id="footer">
            <p>Copyright &copy; 2007 Culinary. All rights reserved. Designed by <a href="http://www.freecsstemplates.org/">Free
                    css templates</a>.&nbsp;&nbsp;<a href="#">Privacy policy</a> | <a href="#">Terms of use</a></p>
        </div>
        <!-- end div#footer -->
    </div>
    <!-- end div#wrapper -->
</body>
</html>
