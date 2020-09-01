<?php
    /**
     * Template Name: Destination
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


<div class="destination-area section-padding">
    <?php echo do_shortcode('[destination-result]'); ?>
</div>

<?php get_footer(); ?>