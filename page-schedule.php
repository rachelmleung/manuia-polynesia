<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Manuia Polynesian Revue
 * @since Manuia Polynesian Revue
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>  
			<?php endwhile; // end of the loop. ?>
            
            
            
		</div><!-- .main-content -->
        
        
        <div class="calendar-widget">
        </div>
        
        <?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>