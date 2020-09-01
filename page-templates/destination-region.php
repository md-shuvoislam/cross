<?php
    /**
     * Template Name: Destination Region
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


<div class="destination-area region section-padding">
    <?php   
    $region = esc_html( get_the_title() );

    $args = array(
        'post_type'              => 'destination',
        'order'                  => 'DESC',
        'posts_per_page'         => '-1',
        'meta_key'               => 'region',
        'meta_value'             => $region,
        );

        

        $destination = new WP_Query( $args ); ?>
        
        <div class="dest-blog-shortcode" > 
            <div class="container">
                <div class="row">
                    <?php while ($destination->have_posts()): $destination->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col">
                        <div class="dest-blog" style="background-image: url(<?php the_field('country_image'); ?>);">
                            <div class="dest-blog-content">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <h4><?php the_field('country'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>  
            </div>
        <?php wp_reset_query();?>
        </div>
</div>

<?php get_footer(); ?>