<?php
    /**
     * The template for displaying all single posts.
     *
     * @package understrap
     */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
    
    get_header();
    $container = get_theme_mod( 'understrap_container_type' );
    ?>

<div class="breadcump-area" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <h1><?php the_title(); ?></h1>
	<div class="breadcrumb-text">
		<a href="https://crosschartering.com" rel="nofollow">Home</a>&nbsp;&nbsp;»&nbsp;&nbsp; <a href="https://crosschartering.com" rel="nofollow">Destinations</a> &nbsp;&nbsp;»&nbsp;&nbsp; <?php the_title(); ?></div>
	</div>

<div class="section-padding" id="single-wrapper">
    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<?php
		$video = get_field('video_link');
		$type = get_field('video_type');
		$videoType = videoType($video);
		if('embed' == $type){
			$vid = cr_parse_url($video);
		}
			if(!empty($video)) :
		?>
        <div class="row">
            <div class="col-sm-12">
                <div class="vedio-area section-padding" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/video-section-bg.png');background-size: cover;background-position: center;background-repeat: no-repeat;">
                    <h4>Check Out Our Video</h4>
                    <h2><?php the_title(); ?></h2>
                    
                    <img style="cursor:pointer;" data-toggle="modal" data-target="#exampleModal" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video-icon.png" alt="" />
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

        <div class="row single-destinations">
            
            <div class="col-lg-6 col-md-12">
                <div class="destination-title">
                    <h2><?php the_title(); ?></h2>
                </div>
                
                <?php the_field('location_description'); ?>
            </div>

            <div class="col-lg-6 col-md-12 section-img">
                <img src="<?php the_field('location_image'); ?>" alt="" />
            </div>
        </div>

        <div class="row">
			<div class="col-md-12">
            <main class="desc-content-sec">
                <?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </main>
			</div>
        </div>
        <!-- .row -->
    </div>
    <!-- #content -->
</div>
<!-- #single-wrapper -->
<?php get_footer(); ?>