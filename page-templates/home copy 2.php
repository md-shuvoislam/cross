<?php
/**
 * Template Name: Home
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
<div class="wrapper slider-area" id="full-width-page-wrapper" style="background-image: url(<?php the_field('hero_area_background'); ?>);">

	<h1><?php the_field('hero_area_text'); ?></h1>
	<div class="hero-buttons">
		<a href="<?php the_field('call_now_button_link'); ?>">Call Now</a>
		<a href="<?php the_field('free_quote_button_link'); ?>">Free Quote</a>
	</div>
</div>
<!-- #full-width-page-wrapper slider -->


<div class="who-we-are-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="section-title">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
					<h2><?php the_field('who_we_are_title'); ?></h2>
				</div>
				<?php the_field('who_we_are_description'); ?>
			</div>
			<div class="col-lg-6 col-md-12 section-img">
				<img src="<?php the_field('who_we_are_image'); ?>" alt="" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="theme-button">
					<a href="<?php the_field('who_we_are_button_link'); ?>">Request A Quote</a>
				</div>
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
					<h2><?php the_field('what_we_do_title'); ?></h2>
				</div>
				<?php the_field('what_we_do_description'); ?>
			</div>
		</div>
	</div>
	<div class="what-we-do-images">
		<div class="what-we-do-s-img">
			<img src="<?php the_field('what_we_do_image_one'); ?>" alt="" />
		</div>
		<div class="what-we-do-s-img">
			<img src="<?php the_field('what_we_do_image_two'); ?>" alt="" />
		</div>
		<div class="what-we-do-s-img">
			<img src="<?php the_field('what_we_do_image_three'); ?>" alt="" />
		</div>
		<div class="what-we-do-s-img">
			<img src="<?php the_field('what_we_do_image_four'); ?>" alt="" />
		</div>
	</div>
</div>


<div class="who-we-are-area how-we-do-it section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 who-last section-img">
				<img src="<?php the_field('how_we_do_it_image'); ?>" alt="" />
			</div>

			<div class="col-lg-6 col-md-12 how-we-do-right">
				<div class="section-title">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
					<h2><?php the_field('how_we_do_it_title'); ?></h2>
				</div>
				<?php the_field('how_we_do_it_description'); ?>
			</div>
		</div>
		<div class="row">
			<div class="theme-button">
				<a href="<?php the_field('how_we_do_it_button_link'); ?>">Request A Quote</a>
			</div>
		</div>
	</div>
</div>


<div class="vedio-area section-padding" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/video-section-bg.png');background-size: cover;background-position: center;background-repeat: no-repeat;">
	<div class="container">
		<?php
		$video = get_field('home_video_link');
			if(!empty($video)) :
		?>
        <div class="row">
            <div class="col-sm-12">
                
                    <?php the_field('home_video_text'); ?>
                    
                    
                    <img style="cursor:pointer; padding:50px 0;" data-toggle="modal" data-target="#exampleModal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video-icon.png" alt="" />
				<div class="video-btn">
					<a href="<?php the_field('home_video_button_link'); ?>">Contact Us</a>
				</div>
                    <!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg popup-modal" role="document">
				<div class="modal-content">
				  <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
					  <span class="float-right" aria-hidden="true">&times;</span>
					</button>
				  <div class="modal-body">
						<video id="player" controls>
							<source src="<?php echo esc_url($video); ?>" type="video/mp4"/>
						</video>
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


<div class="what-we-do-area">
	<div class="container">
		<div class="row wwd-section-text section-padding">
			<div class="col-sm-12">
				<div class="section-title-wwd">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
					<h2><?php the_field('who_we_are_2'); ?></h2>
				</div>
				<?php the_field('who_we_are_description_2'); ?>
			</div>
		</div>
	</div>
</div>


<div class="map-area map-area-home section-padding" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/map-area-bg.png');background-size: cover;background-position: center;background-repeat: no-repeat;">
	<div class="container-fluid">
		<div class="row wwd-section-text">
			<div class="section-title-wwd">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
				<h2><?php the_field('transport_destinations_title'); ?></h2>
			</div>
		</div>
		<div class="row mapu">
			<div class="col-lg-6 col-md-12">
				<div class="left-map">
					<?php the_field('transport_destinations_description'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="right-map">
					<?php echo do_shortcode(get_field('transport_destinations_map')); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gallery-area padding-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title padding-bottom">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
					<h2><?php the_field('gallery_title'); ?></h2>
				</div>
			</div>
		</div>
	</div>
	<?php echo do_shortcode(get_field('gallery_shortcode')); ?>
</div>


<?php get_footer(); ?>