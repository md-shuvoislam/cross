<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<!-- #full-width-page-wrapper slider -->
<div class="breadcump-area" style="background-image: url(<?php the_field('blog_page_header_image', 'option'); ?>);">
    <h1>News</h1>
    <div class="breadcrumb-text">
		<a href="https://www.crosschartering.com" rel="nofollow">Home</a>&nbsp;&nbsp;»&nbsp;&nbsp; News</div>
	</div>
</div>
<!-- #full-width-page-wrapper slider -->

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main blog-posts" id="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row blog-style">
				<div class="col-md-12">

					<?php if ( 'post' == get_post_type() ) : ?>

						<div class="entry-meta blog-time">
							<?php the_time('F j Y') ?>
						</div><!-- .entry-meta -->

					<?php endif; ?>

					<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>


					<header class="entry-header">

						<?php
						the_title(
							sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
							'</a></h2>'
						);
						?>

					</header><!-- .entry-header -->

					<div class="entry-content">

						<?php the_excerpt(); ?>

					</div><!-- .entry-content -->
				</div>
				</div>
			<?php endwhile; ?>
			

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div>

	</div><!-- #container -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>