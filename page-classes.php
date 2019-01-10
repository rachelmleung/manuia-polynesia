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

            $class_image_1 = get_field("class_image_1");
            $section_1 = get_field("section_1");
            $section_1_info = get_field("section_1_info");
            $class_image_2 = get_field("class_image_2");
            $section_2 = get_field("section_2");
            $section_2_info = get_field("section_2_info");
            $what_to_wear = get_field("what_to_wear");
            $class_guidelines = get_field("class_guidelines");
            $class_days = get_field("class_days");
            $members_only = get_field("members_only");
            $unlimited_classes = get_field("unlimited_classes");
            $drop_in = get_field("drop_in");
            $instructors = get_field("instructors");
            $instructor_1_image = get_field("instructor_1_image");
            $instructor_2_image = get_field("instructor_2_image");
            $instructor_3_image = get_field("instructor_3_image");
            $instructor_4_image = get_field("instructor_4_image");
            $instructor_5_image = get_field("instructor_5_image");
            $instructor_6_image = get_field("instructor_6_image");
            $instructor_7_image = get_field("instructor_7_image");
            $instructor_8_image = get_field("instructor_8_image");
            $instructor_9_image = get_field("instructor_9_image");
            $instructor_10_image = get_field("instructor_10_image");
            $instructor_11_image = get_field("instructor_11_image");
            $instructor_12_image = get_field("instructor_12_image");
            $instructor_13_image = get_field("instructor_13_image");
            $instructor_14_image = get_field("instructor_14_image");
            $instructor_15_image = get_field("instructor_15_image");
            $instructor_1 = get_field('instructor_1');
            $instructor_2 = get_field('instructor_2');
            $instructor_3 = get_field('instructor_3');
            $instructor_4 = get_field('instructor_4');
            $instructor_5 = get_field('instructor_5');
            $instructor_6 = get_field('instructor_6');
            $instructor_7 = get_field("instructor_7");
            $instructor_8 = get_field("instructor_8");
            $instructor_9 = get_field("instructor_9");
            $instructor_10 = get_field("instructor_10");
            $instructor_11 = get_field("instructor_11");
            $instructor_12 = get_field("instructor_12");
            $instructor_13 = get_field("instructor_13");
            $instructor_14 = get_field("instructor_14");
            $instructor_15 = get_field("instructor_15");
            $instructor_1_name = get_field('instructor_1_name');
            $instructor_2_name = get_field('instructor_2_name');
            $instructor_3_name = get_field('instructor_3_name');
            $instructor_4_name = get_field('instructor_4_name');
            $instructor_5_name = get_field('instructor_5_name');
            $instructor_6_name = get_field('instructor_6_name');
            $instructor_7_name = get_field("instructor_7_name");
            $instructor_8_name = get_field("instructor_8_name");
            $instructor_9_name = get_field("instructor_9_name");
            $instructor_10_name = get_field("instructor_10_name");
            $instructor_11_name = get_field("instructor_11_name");
            $instructor_12_name = get_field("instructor_12_name");
            $instructor_13_name = get_field("instructor_13_name");
            $instructor_14_name = get_field("instructor_14_name");
            $instructor_15_name = get_field("instructor_15_name");
            $size = 'full';

            ?>
                <div class="classes-page">

                    <?php the_content(); ?>

            <div class="class-buttons">
                <div class="schedule-button">
                    <a class="button" href="<?php echo site_url('/classes/schedule') ?>">View Class Schedule</a>
                </div>
                    
                <div class="instructors-button">
                    <a class="button" href="#jump-instructors">Meet Our Instructors</a>
                </div>
                
            </div>
                <div class="class-sections">
                    <div class="section-1">
                        
                        <figure class="class_image_1">
                            <?php echo wp_get_attachment_image($class_image_1, $size); ?>
                        </figure>

                        <h4><?php echo $section_1; ?></h4>
                        
                        <div class="section-1-info">
                        <p><?php echo $section_1_info; ?></p>
                            <div class="class-days">
                                <p><span style="font-style:italic"><?php echo $class_days; ?></span></p>  
                            </div>
                            <div class="what-to-wear">
                                <p><span style="font-weight:bold"><?php echo $what_to_wear; ?></span></p>
                            </div>
                            <div class="class-guidelines">
                                <p><?php echo $class_guidelines; ?></p>
                                
                          </div>  
                        </div>
                    </div>
                    <div class="section-2">
                        
                       <figure class="class_image_2">
                         <?php echo wp_get_attachment_image($class_image_2, $size); ?>
                        </figure>

                        <h4><?php echo $section_2; ?></h4>
                        
                        <div class="section-2-info">
                            <div class="members-only">
                                <p><span style="font-weight:bold"><?php echo $members_only; ?></span></p>
                                <p> <?php echo $unlimited_classes; ?></p>
                            </div>
                            <div class="drop-in">
                                <p><span style="font-style:italic"><?php echo $drop_in; ?></span></p>
                            </div>
                            <p><?php echo $section_2_info; ?></p>
                            <a class="button" href="http://www.manuiapolynesia.com/wp-content/uploads/2011/12/1z-MembershipAgreeAutoDeduct-1.pdf" target="blank">View Membership Agreement</a>
                        </div>
                    </div>
                </div><!-- end class sections-->
                    
                    <div class="intructors-title">
                        <div id="jump-instructors">
                            <h3><?php echo $instructors; ?></h3>  
                        </div>
                    </div>
                
               <!-- Tab links -->
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'DalyCity')" id="defaultOpen">Daly City</button>
                  <button class="tablinks" onclick="openCity(event, 'Hayward')">Hayward</button>
                </div>  
                    
                <div id="DalyCity" class="tabcontent">
                    <div class="instructors">

                        <div class="instructor-images">
                            <div class="instructor-1">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_1_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_1_name; ?></p>
                                    <p> <?php echo $instructor_1; ?></p>
                                </div>
                            </div>
                            <div class="instructor-2">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_2_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_2_name; ?></p>
                                    <p> <?php echo $instructor_2; ?></p>
                                </div>
                            </div> 
                            <div class="instructor-3">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_3_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_3_name; ?></p>
                                    <p> <?php echo $instructor_3; ?></p>
                                </div>
                            </div>
                            <div class="instructor-4">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_4_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_4_name; ?></p>
                                    <p> <?php echo $instructor_4; ?></p>
                                </div>
                            </div>
                            <div class="instructor-5">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_5_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_5_name; ?></p>
                                    <p> <?php echo $instructor_5; ?></p>
                                </div>
                            </div>
                            <div class="instructor-6">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_6_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_6_name; ?></p>
                                    <p> <?php echo $instructor_6; ?></p>
                                </div>
                            </div>
   
                            <div class="instructor-7">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_7_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_7_name; ?></p>
                                    <p> <?php echo $instructor_7; ?></p>
                                </div>
                            </div>
                            <div class="instructor-8">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_8_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_8_name; ?></p>
                                    <p> <?php echo $instructor_8; ?></p>
                                </div>
                            </div> 
                            <div class="instructor-9">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_9_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    <p> <?php echo $instructor_9_name; ?></p>
                                    <p> <?php echo $instructor_9; ?></p>
                                </div>
                            </div>

                        </div>
                      </div> <!-- end instructors -->
                    </div> <!-- end daly city -->

            <div id="Hayward" class="tabcontent">
                        <div class="instructors">
                            <div class="instructor-images">

                            <div class="instructor-10">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_10_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_10_name; ?></p>
                                    <p> <?php echo $instructor_10; ?></p>
                                </div>
                            </div>
                            <div class="instructor-11">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_11_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_11_name; ?></p>
                                    <p> <?php echo $instructor_11; ?></p>
                                </div>
                            </div>
                            <div class="instructor-12">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_12_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_12_name; ?></p>
                                    <p> <?php echo $instructor_12; ?></p>
                                </div>
                            </div>
                            <div class="instructor-13">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_13_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_13_name; ?></p>
                                    <p> <?php echo $instructor_13; ?></p>
                                </div>
                            </div>
                             <div class="instructor-14">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_14_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_14_name; ?></p>
                                    <p> <?php echo $instructor_14; ?></p>
                                </div>
                            </div>
                            <div class="instructor-15">
                                <figure class="instructor-image">
                                    <?php echo wp_get_attachment_image($instructor_15_image, $size); ?>
                                </figure>
                                <div class="instructor-name">
                                    
                                    <p> <?php echo $instructor_15_name; ?></p>
                                    <p> <?php echo $instructor_15; ?></p>
                                </div>
                            </div>
                            </div><!-- end images-->
                </div> <!-- end instructors -->
            </div>
            
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
        
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
















