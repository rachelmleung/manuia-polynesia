<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Manuia 
 * @since Manuia Polynesian Revue
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
                <div class="experience-button">
				<a class="button" href="<?php echo site_url('/experience/') ?>">Start Your Island Experience</a>
                    
            </div>
            
			<?php endwhile; // end of the loop. ?>
            
             <?php while ( have_posts() ) : the_post();	
            
            	   $front_intro = get_field('front_intro');
	               $image_1 = get_field('image_1');
	               $image_2 = get_field('image_2');
	               $image_3 = get_field('image_3');
        
            
            	   $service_1 = get_field('service_1');
            	   $service_2 = get_field('service_2');
            	   $service_3 = get_field('service_3'); 
            
                   $service_1_info = get_field('service_1_info');
            	   $service_2_info = get_field('service_2_info');
            	   $service_3_info = get_field('service_3_info');
            
	               $link = get_field('site_link'); 
                   $size = "medium"; ?>
            

            <?php endwhile; // end of the loop. ?>


            
		</div><!-- .main-content -->
	</div><!-- #primary -->

        <div class="front-page">
            <div class="front-page-intro">

                 <p><?php echo $front_intro; ?></p>


                <div class="front-intro-button">
                    <a class="button" href="<?php echo site_url('/about/') ?>">Learn About Manuia</a>
                 </div>
            </div>

            <div class="services">
                <div class="service-1">
                <?php if($image_1){ 
                    echo wp_get_attachment_image( $image_1, $size ); }
            ?>
               <div class="all-services">
                <h4><?php echo $service_1; ?></h4>
                <p><?php echo $service_1_info; ?></p>
                   
                <a class="button" href="<?php echo site_url('/entertainment/') ?>">Get the Full Experience</a>
                </div>
                </div>
                
                 <div class="service-2">
                <?php if($image_2){ 
                    echo wp_get_attachment_image( $image_2, $size ); }
            ?>
                <div class="all-services">
                <h4><?php echo $service_2; ?></h4>
                <p><?php echo $service_2_info; ?></p>
                    
                <a class="button" href="<?php echo site_url('/classes/') ?>">View All Classes</a>
                </div>
                </div>
                
                 <div class="service-3">
                <?php if($image_3){ 
                    echo wp_get_attachment_image( $image_3, $size ); }
            ?>
                <div class="all-services">
                    <h4><?php echo $service_3; ?></h4>
                    <p><?php echo $service_3_info; ?></p>
                    
                <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
                </div>
                </div>
                
            </div> <!--end services-->

</div>
<?php get_footer(); ?>
