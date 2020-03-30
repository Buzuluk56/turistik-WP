<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? echo wp_get_document_title()?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <? wp_head()?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="<? echo site_url()?>"><img src="<? echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt="<? bloginfo('name')?>" class="logo-wrap__logo-img"></a></div>
                </div>



                <!--                <nav class="main-navigation">-->
                <!--                    <ul class="nav-list">-->
                <!--                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Главная</a></li>-->
                <!--                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Полезная информация</a></li>-->
                <!--                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Последние акции</a></li>-->
                <!--                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">О сервисе</a></li>-->
                <!--                        <li class="nav-list__nav-item"><a href="#" class="nav-list__nav-item__nav-link">Новости</a></li>-->
                <!--                    </ul>-->
                <!--                </nav>-->

                <?
                $args = array(
                    'theme_location' => 'topmenu',
                    'container' => 'nav',
                    'container_class' => 'main-navigation',
                    'menu_class' => 'nav-list',
                    'depth' => 1,
                );
                wp_nav_menu($args);
                ?>



            </div>
        </div>
        <div class="bottom-header">
            <div class="search-form-wrap">
                <form class="search-form" action="<? echo site_url()?>">
                    <input type="text" name="s" placeholder="Поиск..." class="search-form__input">
                    <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </header>
    <!-- header_end-->