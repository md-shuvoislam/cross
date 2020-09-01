<?php 
	 add_action( 'wp_enqueue_scripts', 'transport_enqueue_styles' );
	 function transport_enqueue_styles() {

        $the_theme     = wp_get_theme();
        $theme_version = $the_theme->get( 'Version' );

 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 		  wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/css/theme.min.css' );
 		  wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/css/magnific-popup.css' );
          wp_enqueue_style( 'bodoni-fonts', get_stylesheet_directory_uri() . '/css/fonts/bodoni-fonts.css' );
 		  // google fonts
 		  wp_enqueue_style( 'transport-theme-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

        $js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		
			wp_enqueue_script('plyr', '//cdn.plyr.io/3.6.2/plyr.js');
			wp_enqueue_style('plyr-css', '//cdn.plyr.io/3.6.2/plyr.css');
		
        wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), $js_version, true );
		 
        wp_enqueue_script( 'actvie-js', get_stylesheet_directory_uri() . '/js/active.js', array('jquery'), $js_version, true );
 	} 

/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';
require dirname( __FILE__ ) . '/inc/class-wp-bootstrap-navwalker.php';


/**
 * Footer Widgets
 */

function transport_theme_footer_widget() {
    // theme footer
    register_sidebar( array(
        'name'          => __( 'Theme Footer', 'crosschartering' ),
        'id'            => 'theme-footer',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'isdb' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    
}
add_action( 'widgets_init', 'transport_theme_footer_widget' );


// breadcump

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


// theme options

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}


function destination_shortcode() {
    ob_start();?> 

    <?php   $args = array(
        'post_type'              => 'destination',
        'order'                  => 'DESC',
        'posts_per_page'         => '-1',
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

    <?php return ob_get_clean();
}
add_shortcode( 'destination-result', 'destination_shortcode' );





