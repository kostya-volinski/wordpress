<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Prestige
 */

get_header();
?>



		<?php
		while ( have_posts() ) :
			the_post();
		the_title();
            echo "<br>";
        the_content();

			// If comments are open or we have at least one comment, load up the comment template.

		endwhile; // End of the loop.
		?>



<?php

get_footer();

