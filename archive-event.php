<?php
/**
 * The template for displaying lists of events
 *
 * Queries to do with events will default to this template if a more appropriate template cannot be found
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory.
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

	<!-- Page header-->

        <div class="schedule-page">
        <div class="page-title-custom">
            <h1>Upcoming Classes</h1>
        </div>
        <div class="schedule-description">
            <p>Our classes are for members only.<br> Please <a href="../contact-us/">contact us</a> about Drop In classes.</p>
        </div>
		<h1 class="page-title">
		<?php
		if ( eo_is_event_archive( 'day' ) ) {
			//Viewing date archive
			echo __( 'Classes: ','eventorganiser' ) . ' ' . eo_get_event_archive_date( 'jS F Y' );
		} elseif ( eo_is_event_archive( 'month' ) ) {
			//Viewing month archive
			echo __( 'Classes: ','eventorganiser' ) . ' ' . eo_get_event_archive_date( 'F Y' );
		} elseif ( eo_is_event_archive( 'year' ) ) {
			//Viewing year archive
			echo __( 'Classes: ','eventorganiser' ) . ' ' . eo_get_event_archive_date( 'Y' );
		} else {
			_e( 'Classes', 'eventorganiser' );
		}
		?>
		</h1>
        </div>

	<?php eo_get_template_part( 'eo-loop-events' ); //Lists the events ?>
            
<div class="more-classes eo-events-nav-later"><a href="http://localhost/manuia/schedule/classes/page/2/">More Classes <span class="meta-nav">→</span></a></div>
        </div>
        

        
<?php get_sidebar(); ?>
</div><!-- #primary -->
        

<!-- Call template sidebar and footer -->

<?php get_footer();
