<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::TITLE_PAGE; ?></title>
    <link href="<?php echo Application::INCLUDE_FULL_PATH ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2> Projeto MCV Básico </h2>
            </div>
            <nav class="menu">
                <div class="menu">
                    <?php
                    foreach ($this->menuItems as $namePage) {
                        echo '<a href="' . Application::INCLUDE_PATH . strtolower($namePage) . '">' . $namePage . '</a>';
                    }
                    ?>
            </nav>
        </div>
        <div class="clear"></div>
        </div>
    </header>