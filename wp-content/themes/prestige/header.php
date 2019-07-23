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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="nav-bar">
        <div class="bar">
            <div class="bar-menu">
                <img src="<?php echo get_the_post_thumbnail(); ?>/wp-content/themes/prestige/assets/images/menu.svg" alt=""> <span class="sr-only"><a href=""><img src="images/menu.svg" alt=""></a></span>
            </div>
            <div class="menu-right-bar">
                <a href="">MENU</a>
            </div>
        </div>
        <div class="phone">
            <a href="">+38 (096) 762-40-96</a>
        </div>
        <div class="logo">
            <img src="<?php echo get_the_post_thumbnail(); ?>/wp-content/themes/prestige/assets/images/logo.svg" alt="">
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
            <li><a href="#">Жінкам</a></li>
            <li><a href="#">Чоловікам</a></li>
            <li><a href="#">Дітям</a></li>
            <li><a href="#"><i>Sale</i></a></li>
            <li><a href="#">Підписка</a></li>
            <li><a href="#">Подарункові коробки</a></li>
        </ul>
    </div>
    <div class="drop-next-menu">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Каталог  продукції
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="#">Жінкам</a>
            <a href="#">Чоловікам</a>
            <a href="#">Дітям</a>
            <a href="#"><i>Sale</i></a>
            <a href="#">Підписка</a>
            <a href="#">Подарункові коробки</a>
        </div>
    </div>
</div>