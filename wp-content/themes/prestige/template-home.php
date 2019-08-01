<?php
/* Template Name: Головна */

get_header();
?>


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
        <div class="carousel-list" id="carousel">
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

        <a href=""><?php echo get_the_post_thumbnail( $id, 'full', array('class' => 'alignleft') ); ?></a>
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


<div class="container-fluid">
    <div class="rectangle">
            <?php
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => 10,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post_author',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);

                ?>

                <div class="rect">
                    <img src="<?php echo get_field('icon'); ?>" alt="">
                    <div class="rect-p">
                        <div class="rect-le">
                            <?php the_field('title'); ?>
                        </div>
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>

                <?php
            }


            wp_reset_postdata(); // сброс
            ?>

    </div>
</div>





<div class="container">
    <div class="main" style="text-align: center">
        Новини
    </div>
</div>


<div class="container">
    <div class="news">
<?php
// параметры по умолчанию
$posts = get_posts( array(
    'numberposts' => 2,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);

    ?>

            <div class="left-news">
                <div class="image-news">
                    <?php echo get_the_post_thumbnail( $id, 'large', array('class' => 'alignleft') ); ?>
                </div>
                <div class="post-news">

                    <a href=""><?php the_title(); ?></a>
                </div>
                <div class="text-news">
                    <?php the_excerpt(); ?>
                </div>
            </div>

    <?php
}


wp_reset_postdata(); // сброс
?>
    </div>
</div>


<div class="container">
    <div class="but" style="align-content: center">
        <div class="button">
            <div class="but-t">
                <button type="button" class="btn btn-outline-danger">Всі новини</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="aboat-us">
        Про нас
    </div>
</div>


<div class="container">
    <div class="about">
        <div class="us" style="text-align: center">

            <?php echo get_field('about'); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="but" style="align-content: center">
        <div class="button">
            <div class="but-t">
                <button type="button" class="btn btn-outline-danger">читати більше</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="socks" style="text-align: center">
        #V&T_Socks
    </div>
</div>

<div class="container-fluid" style="padding:0">
    <div class="img-front">

        <?php foreach (get_field('socks') as $image): ?>
            <div><img src="<?php echo $image[ 'img-socks']; ?>" alt=""></div>
        <?php endforeach; ?>

    </div>
</div>


<?php
$terms = get_terms( array(
    'taxonomy'      => array( 'taxonomy' ), // название таксономии с WP 4.5
    'orderby'       => 'id',
    'order'         => 'ASC',
    'hide_empty'    => true,
    'object_ids'    => null,
    'include'       => array(),
    'exclude'       => array(),
    'exclude_tree'  => array(),
    'number'        => '',
    'fields'        => 'all',
    'count'         => false,
    'slug'          => '',
    'parent'         => '',
    'hierarchical'  => true,
    'child_of'      => 0,  // дочірні категорії
    'get'           => '', // ставим all чтобы получить все термины
    'name__like'    => '',
    'pad_counts'    => false,
    'offset'        => '',
    'search'        => '',
    'cache_domain'  => 'core',
    'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
    'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
    'update_term_meta_cache' => true, // подгружать метаданные в кэш
    'meta_query'    => '',
) );
?>

<?php
//foreach( $terms as $term ){ ?>
<!---->
<!---->
<!--<ul>-->
<!--    <li><a href="--><?php //echo get_term_link($term); ?><!--">--><?php //echo $term->name; ?><!--</a></li>-->
<!--    <p>--><?php //echo get_field('label'); $term; ?><!--</p>-->
<!--    <pre>--><?php // ?><!--</pre>-->
<!--</ul>-->
<!---->
<?php //} ?>




<?php get_footer(); ?>


