<?php
/**
 * Template part for displaying a singular page/post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores_Bootstrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="hero overlay-container bg-dark text-light p-3 d-flex justify-content-center align-items-center" style="background-image:url(<?= get_the_post_thumbnail_url( $post->ID, 'extra_large' ); ?>)">
		<div class="text-center z-index-10">
			<h1 class="singular-title text-white">
				<?= the_title() ?>
			</h1>
		</div>
		<div class="overlay z-index-5"></div>
	</div>
	<div class="container main-container">
		<?php the_content(); ?>
	</div>
</article>
