<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prestige
 */

?>
<footer>
    <div class="container">
        <div class="row-footer">
            <div>
                Про компанію
                <div class="list">
                    <ul>
                        <li><a href="">Про нас</a></li>
                        <li><a href="">Галерея</a></li>
                        <li><a href="">Таблиця розмірів</a></li>
                        <li><a href="">Новини</a></li>
                        <li><a href="">Відгуки</a></li>
                        <li><a href="">Контакти</a></li>
                    </ul>
                </div>
            </div>
            <div>
                МАГАЗИН
                <div class="list">
                    <ul>
                        <li><a href="">ЖІНКАМ</a></li>
                        <li><a href="">ЧОЛОВІКАМ</a></li>
                        <li><a href="">ДІТЯМ</a></li>
                        <li><a href="">SALE</a></li>
                        <li><a href="">ПІДПИСКА</a></li>
                        <li><a href="">ПОДІРНКОВІ КОРОБКИ</a></li>
                    </ul>
                </div>
            </div>
            <div>
                КЛІЄНТАМ
                <div class="list">
                    <ul>
                        <li><a href="">Питання-відповіді</a></li>
                        <li><a href="">Доставка і оплата</a></li>
                        <li><a href="">Повернення товару</a></li>
                        <li><a href=""></a></li>
                        <br>
                        <li><a href=""></a></li>
                        <br>
                        <li><a href="" style="margin-right: 10px;">Прайс лист <img src="images/download.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div>
                ПАРТНЕРАМ
                <div class="list">
                    <ul>
                        <li><a href="">Опт</a></li>
                        <li><a href="">Крупний опт</a></li>
                        <li><a href="">Дропшипінг</a></li>
                        <li><a href="">Корпоративні замовлення</a></li>
                    </ul>
                </div>
            </div>
            <div>
                КОНТАКТИ
                <div class="list">
                    <ul>
                        <li><a href=""><?php echo get_field('phone', 'options'); ?></a></li>
                        <li><a href=""><?php echo get_field('email', 'options'); ?></a></li>
                        <li class="contacts">
                            <a href=""><img src="images/facebook-logo.svg" alt=""></a>
                            <a href=""><img src="images/instagram-social-outlined-logo.svg" alt=""></a>
                            <a href=""><img src="images/twitter-social-outlined-logo.svg" alt=""></a>
                            <a href=""><img src="images/youtube.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="foot">
            <div class="r">
                ©Сopyright 2018 - V&T SOCKS
            </div>
            <div class="l">
                <a href=""><img src="images/group.svg" alt=""></a>
            </div>
        </div>
    </div>


</footer>


<?php wp_footer(); ?>

