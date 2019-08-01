<?php
get_header();
?>

<?php if ( have_posts() ) : ?>

    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
    ?>
        <?php $term = get_queried_object(); ?>
        <h1><?php ?></h1>
        <div class="bord-next">
            <div class="label_item">NEW</div>

            <a href=""><?php echo get_the_post_thumbnail( $id, 'full', array('class' => 'alignleft') ); ?></a>
            <div class="label">
                <a href=""><?php the_field('text'); ?></a>
                <p><?php the_field('price'); ?> UA</p>
            </div>
        </div>

    <?php
        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>


<?php get_footer(); ?>
