<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prestige
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
<header>
    <div class="nav-bar">
        <div class="bar">
            <div class="bar-menu">
                <a class="knop" data-toggle="dropdown" href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.svg" alt=""> <span class="sr-only"></span></a>
                <div class="mini-menu">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        <li><a href="">ПРО НАС</a></li>
                        <li><a href="">СКОРО У ПРОДАЖУ</a></li>
                        <li><a href="">ТАБЛИЦЯ РОЗМІРІВ</a></li>
                        <li><a href="">КЛІЄНТАМ</a></li>
                        <li><a href="">ПАРТНЕРАМ</a></li>
                        <li><a href="">НОВИНИ</a></li>
                        <li><a href="">ВІДГУКИ</a></li>
                        <li><a href="">КОНТАКТИ</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-right-bar">
                <a href="">MENU</a>
            </div>
        </div>
        <div class="phone">
            <a href="">+38 (096) 762-40-96</a>
        </div>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
        </div>

        <div class="nav-end">
            <div class="icon">
                <ul>
                    <li><a href=""><i class="icon-magnifying-glass"></i></a></li>
                    <li><a href=""><i class="icon-heart"></i></a></li>
                    <li><a href=""><i class="icon-shopping-bag"></i></a></li>
                    <li><a href=""><i class="icon-user"></i></a></li>
                </ul>
            </div>
            <div class="drop-first">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    UAH
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">USA</a>
                    <a class="dropdown-item" href="#">UAH</a>
                </div>
            </div>
            <div class="drop-second">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    UA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">UA</a>
                    <a class="dropdown-item" href="#">RU</a>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="next-menu">
        <ul>
            <li class="nav-item-woman">
                <a href="#">Жінкам</a>
                <div class="descr-woman">
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/woman-1.png" alt=""></a>
                        <a href="">Довгі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/woman-2.png" alt=""></a>
                        <a href="">Класичні шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/woman-3.png" alt=""></a>
                        <a href="">Короткі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/woman-4.png" alt=""></a>
                        <a href="">Слід, послідок</a>
                    </div>
                </div>
            </li>
            <li class="nav-item-man">
                <a  href="#">Чоловікам</a>
                <div class="descr-man">
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/man-1.png" alt=""></a>
                        <a href="">Довгі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/man-2.png" alt=""></a>
                        <a href="">Класичні шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/man-3.png" alt=""></a>
                        <a href="">Короткі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/man-4.png" alt=""></a>
                        <a href="">Слід, послідок</a>
                    </div>
                </div>
            </li>
            <li class="nav-item-child">
                <a href="#">Дітям</a>
                <div class="descr-child">
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid-1.png" alt=""></a>
                        <a href="">Довгі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid-2.png" alt=""></a>
                        <a href="">Класичні шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid-3.png" alt=""></a>
                        <a href="">Короткі шкарпетки</a>
                    </div>
                    <div class="des">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid-4.png" alt=""></a>
                        <a href="">Слід, послідок</a>
                    </div>
                </div>
            </li>
            <li><a href="#"><i>Sale</i></a></li>
            <li><a href="#">Підписка</a></li>
            <li><a href="#">Подарункові коробки</a></li>
        </ul>
    </div>
</div>
<div class="drop-next-menu">
    <a class="item-menu-drop" href="javascript:void(1);">Каталог продукції</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="#">Жінкам</a>
        <a href="#">Чоловікам</a>
        <a href="#">Дітям</a>
        <a href="#"><i>Sale</i></a>
        <a href="#">Підписка</a>
        <a href="#">Подарункові коробки</a>
        <div class="descr">
            Какой-то текст который должен быть в блоке<br>
            <a href="#">Интересная ссылка</a>
        </div>
    </div>
</div>
</div>