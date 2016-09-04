<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mvl
 */

get_header(); ?>

	<div class="main-container">
		<main id="main" class="site-main" role="main">

			<div class="base-margin-top base-margin-bottom text-medium"><h1><?php echo the_title(); ?></h1></div

			<?php

			//Post Thumbnail
			the_post_thumbnail();

			//Images
			$images = get_field('add_images_to_posts');

			if( $images ): ?>
				<ul>
					<?php foreach( $images as $image ): ?>
						<li>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<div class="col-50">
				<div class="base-margin-top base-margin-bottom">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						else:
					endif;?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
