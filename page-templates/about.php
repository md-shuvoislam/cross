<?php
    /**
     * Template Name: About
     *
     * Template for displaying a page without sidebar even if a sidebar widget is published.
     *
     * @package understrap
     */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
    
    get_header();
    $container = get_theme_mod( 'understrap_container_type' );
    ?>
<?php if ( is_front_page() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<!-- #full-width-page-wrapper slider -->
<div class="breadcump-area" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumb-text"><?php get_breadcrumb(); ?></div>
</div>
<!-- #full-width-page-wrapper slider -->
<div class="who-we-are-area section-padding">
    <div class="container">

        <div class="row about-solutions">
            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('yacht_logistic_solutions_title'); ?></h2>
                </div>

                <?php the_field('yacht_logistic_solutions_description'); ?>
                
            </div>
            <div class="col-lg-6 col-md-12 section-img section-img-abt">
                <img src="<?php the_field('yacht_logistic_solutions_image'); ?>" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="theme-button">
                <a href="<?php the_field('yacht_logistic_solutions_button_link'); ?>">Request A Quote</a>
            </div>
        </div>

        <div class="row about-experience">
            <div class="col-lg-6 col-md-12 section-img about-experience-img">
                <img src="<?php the_field('experience_image'); ?>" alt="" />
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('experience_title'); ?></h2>
                </div>
                <?php the_field('experience_description'); ?>
            </div>
        </div>


    </div>
</div>

<div class="local-area section-padding">
	<div class="container">
		<div class="row wwd-section-text">
            <div class="col-sm-12">
                <div class="section-title-wwd">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('global_reach_title'); ?></h2>
                </div>
                <?php the_field('global_reach_description'); ?>
            </div>
        </div>
        <div class="row">
            <div class="theme-button">
                <a href="<?php the_field('global_reach_contact_button_link'); ?>">Contact Us Now</a>
                <a href="<?php the_field('global_reach_request_button_link'); ?>" class="local-btn">Request A Quote</a>
            </div>
        </div>
	</div>
</div>

<div class="what-we-do-area">
    <div class="container">
        <div class="row wwd-section-text section-padding">
            <div class="col-sm-12">
                <div class="section-title-wwd">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('destinations_title'); ?></h2>
                </div>
                <?php the_field('destinations_description'); ?>
            </div>
        </div>
    </div>
    <div class="what-we-do-images">
        <div class="what-we-do-s-img">
            <img src="<?php the_field('destinations_image_one'); ?>" alt="" />
        </div>
        <div class="what-we-do-s-img">
            <img src="<?php the_field('destinations_image_two'); ?>" alt="" />
        </div>
        <div class="what-we-do-s-img">
            <img src="<?php the_field('destinations_image_three'); ?>" alt="" />
        </div>
        <div class="what-we-do-s-img">
            <img src="<?php the_field('destinations_image_four'); ?>" alt="" />
        </div>
    </div>
</div>

<div class="services-offers-area section-padding">
	<div class="container">
		<div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('services_&_offers_title'); ?></h2>
                </div>

				<?php the_field('services_&_offers_top_area_description'); ?>
                

            </div>
        </div>

        <div class="row service-detals">
			<div class="col-lg-6 col-md-12">
				<div class="left-map left-services">

					<?php the_field('services_&_offers_midddle_area_text'); ?>

				</div>
			</div>
			<div class="col-lg-6 col-md-12 section-img service-detals-img">
                <img src="<?php the_field('services_&_offers_middle_area_image'); ?>" alt="" />
            </div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php the_field('services_&_offers_bottom_area_text'); ?>
			</div>
		</div>

	</div>
</div>

<div class="vedio-area section-padding" style="background-image: url('https://www.crosschartering.com/wp-content/uploads/2020/08/video-bg.png');background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container">
		<?php
		$video = get_field('about_us_vedio_area_video_link');
		$type = get_field('about_video_type');
		$videoType = videoType($video);
		if('embed' == $type){
			$vid = cr_parse_url($video);
		}
		
			if(!empty($video)) :
		?>
        <div class="row">
            <div class="col-sm-12">
                
                    <?php the_field('about_us_vedio_area_text'); ?>
                    
                    
                    <img style="cursor:pointer; padding:50px 0;" data-toggle="modal" data-target="#exampleModal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video-icon.png" alt="" />
				<div class="video-btn">
					<a href="<?php the_field('about_us_vedio_area_button_link'); ?>">Contact Us</a>
				</div>
                    <!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg popup-modal" role="document">
				<div class="modal-content">
				  <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
					  <span class="float-right" aria-hidden="true">&times;</span>
					</button>
				  <div class="modal-body">
					  
					  <?php if('self' == $type) : ?>
						<video id="player" controls>
							<source src="<?php echo esc_url($video); ?>" type="video/mp4"/>
						</video>
					  <?php endif; ?>
					  <?php if('embed' == $type) : ?>
					  	<div id="player" data-plyr-provider="<?php echo $videoType; ?>" data-plyr-embed-id="<?php echo $vid; ?>"></div>
					  <?php endif; ?>
				  </div>
				  
				</div>
			  </div>
			</div>
                </div>
            </div>
        </div>
		
		<?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>