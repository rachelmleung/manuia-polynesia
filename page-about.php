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

            $about_image = get_field("about_image");
            $more_about = get_field("more_about");
            $manuia_logo = get_field("manuia_logo");
            $bod = get_field("bod");
            $bod_1_image = get_field("bod_1_image");
            $bod_2_image = get_field("bod_2_image");
            $bod_3_image = get_field("bod_3_image");
            $bod_4_image = get_field("bod_4_image");
            $bod_5_image = get_field("bod_5_image");
            $bod_6_image = get_field("bod_6_image");
            $bod_1 = get_field('bod_1');
            $bod_2 = get_field('bod_2');
            $bod_3 = get_field('bod_3');
            $bod_4 = get_field('bod_4');
            $bod_5 = get_field('bod_5');
            $bod_6 = get_field('bod_6');
            $bod_1_name = get_field('bod_1_name');
            $bod_2_name = get_field('bod_2_name');
            $bod_3_name = get_field('bod_3_name');
            $bod_4_name = get_field('bod_4_name');
            $bod_5_name = get_field('bod_5_name');
            $bod_6_name = get_field('bod_6_name');
            $size = 'full';
            
            ?>
                <div class="about-page">

                    <?php the_content(); ?>

                <figure class="about-image">
                    <?php echo wp_get_attachment_image($about_image, $size); ?>
                </figure>


                    <div class="more-about">
                        <p><?php echo $more_about; ?></p>
                    </div>
                    
                    <div class="about-cta">
                    <div class="about-classes-button">
                    <a class="button" href="<?php echo site_url('/classes/') ?>">Take Dance Classes</a></div>
                    <div class="about-show-button">
                    <a class="button" href="<?php echo site_url('/entertainment/') ?>">Hire Live Entertainment</a></div>
                    </div>
                

                    <div class="bod">
                        <h3><?php echo $bod; ?></h3> 
                        <div class="bod-images">
                            <div class="bod-1">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_1_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_1_name; ?></p>
                                    <p> <?php echo $bod_1; ?></p>
                                </div>
                            </div>
                            <div class="bod-2">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_2_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_2_name; ?></p>
                                    <p> <?php echo $bod_2; ?></p>
                                </div>
                            </div> 
                            <div class="bod-3">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_3_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_3_name; ?></p>
                                    <p> <?php echo $bod_3; ?></p>
                                </div>
                            </div>
                            <div class="bod-4">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_4_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_4_name; ?></p>
                                    <p> <?php echo $bod_4; ?></p>
                                </div>
                            </div>
                            <div class="bod-5">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_5_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_5_name; ?></p>
                                    <p> <?php echo $bod_5; ?></p>
                                </div>
                            </div>
                            <div class="bod-6">
                                <figure class="bod-image">
                                    <?php echo wp_get_attachment_image($bod_6_image, $size); ?>
                                </figure>
                                <div class="bod-name">
                                    
                                    <p> <?php echo $bod_6_name; ?></p>
                                    <p> <?php echo $bod_6; ?></p>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end bod -->


                </div>
            
            
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>















