<?php
//№3. Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
?>
<?php
include 'first/session.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        body {
            background: #1d4b8f;
            font-family: Arial;
        }
        .main-container {
            background-color: aliceblue;

            width: 600px;
            margin: 0 auto;
        }
        .common {
            margin: 20px;
        }
        .header {
            overflow: auto;
        }
        .content {
            min-height: 500px;
        }
        .top-menu ul, .top-menu li {
            list-style: none;
        }
        .top-menu li {
            float: left;
            margin: 10px;
        }
        .site-title, .top-menu {
            float: left;
        }
    </style>
</head>
<body>
<div class="main-container">
    <pre>
    <?php
    getVisitedPages();
    ?>
    </pre>
    <div class="header common">
        <div class="top-menu">
            <ul>
                <li><a href="/3_home_task_from_27.01.2018?page=About">About</a></li>
                <li><a href="/3_home_task_from_27.01.2018?page=Products">Products</a></li>
                <li><a href="/3_home_task_from_27.01.2018?page=Contacts">Contacts</a></li>
                <li><a href="/3_home_task_from_27.01.2018?page=Profile">Profile</a></li>
            </ul>
        </div>
    </div>
    <div class="content common">
        <?php
        $page = (string)@$_GET['page'];
        if(!$page){
            $page = 'index';
        }
        include "pages/$page.php";
        ?>
    </div>
    <div class="footer common">
        Footer
    </div>
</div>
</body>
</html>
