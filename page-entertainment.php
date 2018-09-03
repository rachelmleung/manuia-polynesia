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
			<?php while ( have_posts() ) : the_post(); 
            
            $experience_1_image = get_field("experience_1_image");
            $experience_1 = get_field("experience_1");
            $experience_1_info = get_field('experience_1_info');
            $experience_2_image = get_field("experience_2_image");
            $experience_2 = get_field("experience_2");
            $experience_2_info = get_field('experience_2_info');
            $experience_3_image = get_field("experience_3_image");
            $experience_3 = get_field("experience_3");
            $experience_3_info = get_field('experience_3_info');
            $experience_title = get_field('experience_title');
            $experience = get_field('experience');
            $clients_include = get_field('clients_include');
            $clients = get_field('clients');
            $booking = get_field('booking');
            $community = get_field('community');
            $community_info = get_field('community_info');

            $size = 'full';
            
            ?>
            <div class="experience-page">


                    <?php the_content(); ?>
                        <div class="clients">
                            <p> <?php echo $clients ?></p>
                        </div>
                    <div class="mobile-book-cta">
                    <div class="booking-button">
                        <a class="button" href="<?php echo site_url('/book-your-show/') ?>">Book Your Live Entertainment Today!</a>
                    </div>
                </div>
                <div class="experiences">
                    <div class="experience-1">

                        <figure class="experience-1-image">
                            <?php echo wp_get_attachment_image($experience_1_image, $size); ?>
                        </figure>

                        <div class="experience-1-title">
                            <h4><?php echo $experience_1; ?></h4>
                        </div>

                        <div class="experience-1-info">
                            <p><?php echo $experience_1_info; ?></p>      
                        </div>
                    </div>
                    
                    
                    <div class="experience-2">
                        <figure class="experience-2-image">
                            <?php echo wp_get_attachment_image($experience_2_image, $size); ?>
                        </figure>

                        <div class="experience-2-title">
                            <h4><?php echo $experience_2; ?></h4>
                        </div>

                        <div class="experience-2-info">
                            <p><?php echo $experience_2_info; ?></p>      
                        </div>
                    </div>
                    
                    <div class="experience-3">
                        <figure class="experience-3-image">
                            <?php echo wp_get_attachment_image($experience_3_image, $size); ?>
                        </figure>

                        <div class="experience-3-title">
                            <h4><?php echo $experience_3; ?></h4>
                        </div>

                        <div class="experience-3-info">
                            <p><?php echo $experience_3_info; ?></p>      
                        </div>
                    </div>
                    
                </div> <!-- end experiences -->
            <div class="the-experience">
                <h3> <?php echo $experience_title; ?></h3>
                <p> <?php echo $experience; ?></p>

            </div>
            
            <div class="booking">
                <p> <?php echo $booking; ?></p>
                
                <div class="booking-button">
                    <a class="button" href="<?php echo site_url('/book-your-show/') ?>">Book Your Show! </a>
                </div>
            </div>  
            
            <div class="community">
                <h3> <?php echo $community; ?></h3>
                <p> <?php echo $community_info ?></p>
            </div><!-- end experience page -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
