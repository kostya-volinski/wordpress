<?php
/* Template Name: Головна */

get_header();
?>

<!--<pre>--><?php //var_dump(get_field('img')); ?><!--</pre>-->


<div class="multiple-items">
    <div class="multiple">
        <?php foreach (get_field('img') as $image): ?>
        <div><img src="<?php echo $image['img']; ?>" alt=""></div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container">
    <div class="info-sale">
        <div class="info-l">
            <div class="pro">
                Наша продукція
            </div>
        </div>
        <div class="info-r">
            <div class="new">
                <a href="">Новинки</a>
            </div>
            <div class="sale">
                <a href="">Sale</a>
            </div>
        </div>
    </div>
</div>

<div class="container-carousel">
    <div class="cont-c">
        <div class="carousel-list">
<?php
// параметры по умолчанию
$posts = get_posts( array(
    'numberposts' => 5,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'products',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);

?>

    <div class="bord-next">
        <div class="label_item">NEW</div>
        <?php the_title(); ?>
        <a href=""><?php echo get_the_post_thumbnail( $id, 'thumbnail', array('class' => 'alignleft') ); ?></a>
        <div class="label">
            <a href=""><?php the_field('text'); ?></a>
            <p><?php the_field('price'); ?> UA</p>
        </div>
    </div>

    <?php
}


wp_reset_postdata(); // сброс
?>
        </div>
    </div>
</div>


<?php get_footer(); ?>


