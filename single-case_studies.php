<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Manuia Polynesian Revue
 * @since Manuia Polynesian Revue
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
            
            <?php while ( have_posts() ) : the_post(); 
            
            $services = get_field('services');
            
            ?>
            
            
            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h5> <?php echo $services; ?> </h5>
                </aside>
                
                
				<?php the_content(); ?>
            </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
