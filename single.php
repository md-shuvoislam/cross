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

<!-- #full-width-page-wrapper slider -->
<div class="breadcump-area" style="background-image: url(<?php the_field('single_blog_page_header_image', 'option'); ?>);">
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumb-text">
		<a href="https://crosschartering.com" rel="nofollow">Home</a>&nbsp;&nbsp;»&nbsp;&nbsp; <a href="https://crosschartering.com" rel="nofollow">News</a> &nbsp;&nbsp;»&nbsp;&nbsp; <?php the_title(); ?></div>
	</div>
</div>
<!-- #full-width-page-wrapper slider -->

<div class="section-padding" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<main class="site-main blog-posts" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row single-blog-style">
					<div class="col-md-12">
						<header class="entry-header-single">
							<h2><?php the_title(); ?></h2>
						</header><!-- .entry-header -->

						<?php if ( 'post' == get_post_type() ) : ?>

							<div class="blog-single-time">
								<h5>Date: <span><?php the_time('F, jS, Y') ?></span></h5>

							</div><!-- .entry-meta -->

						<?php endif; ?>

						<div class="author-name">
							<h5>Author: <span><?php the_author(); ?></span></h5>
						</div>

						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						

						<div class="entry-content">

							<?php the_content(); ?>

						</div><!-- .entry-content -->

					</div>
				</div>
			<?php endwhile; ?>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
