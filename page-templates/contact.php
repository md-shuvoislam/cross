<?php
    /**
     * Template Name: Contact
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


<div class="get-in-touch local-area section-padding">
    <div class="container">
        <div class="row wwd-section-text">
            <div class="col-md-12">
                <div class="section-title-wwd">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title-icon.png" alt="" />
                    <h2><?php the_field('get_in_touch_title'); ?></h2>
                </div>
                <?php the_field('get_in_touch_description'); ?>
            </div>
        </div>

        <div class="row touch-boxes">
            <div class="col-lg-4 col-md-6">
                <div class="single-touch">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico-phone.png" alt="" />

                    <?php the_field('get_in_touch_first_box'); ?>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-touch">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico-email.png" alt="" />

                    <?php the_field('get_in_touch_two_box'); ?>

                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-touch">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico-address.png" alt="" />

                    <?php the_field('get_in_touch_three_box'); ?>
                    
                    
                </div>
            </div>
        </div>


    </div>
</div>


<div class="map-area contact-maps">
    <?php echo do_shortcode(get_field('get_in_touch_map_shortcode')); ?>
</div>


<div class="contct-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="http://localhost/transport/wp-content/themes/chartering-theme/img/title-icon.png" alt="">
                        </div>
                        <div class="col-md-10">
                            <?php the_field('get_in_touch_form_title'); ?>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode(get_field('get_in_touch_form_shortcode')); ?>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>