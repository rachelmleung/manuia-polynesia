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
            <div class="locations">
                
                
                <div class="daly-city">
                    
                    <div class="address">
                    <p><strong>Daly City Studio</strong></p>
                    <p>35 Washington Street</p>
                    <p>Daly City, CA 94014</p>
                        <div class="hours">
                            <p>Open during class hours or by scheduled appointment only. </p>
                        </div>
                    </div>

                    
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.3625011121508!2d-122.471599585072!3d37.687684879775325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7c0d2b557e3d%3A0x4316901bc793c1b1!2s35+Washington+St%2C+Daly+City%2C+CA+94014!5e0!3m2!1sen!2sus!4v1518409402890" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
               <!-- <div class="hayward">

                    <p><strong>Hayward Class</strong></p>
                    <p>30998 Huntwood Ave Suite 105</p>
                    <p>Hayward, CA 94544</p>
            
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.5895305497233!2d-122.05660878507459!3d37.611818379789476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f95b3e5875efb%3A0x4c7b81b959225cda!2s30998+Huntwood+Ave+%23105%2C+Hayward%2C+CA+94544!5e0!3m2!1sen!2sus!4v1518409433655" width="40%" height="30%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> -->
            </div>

            
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
