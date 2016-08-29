<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage MVL
 * @since 2016
 */

get_header(); ?>



<div id="container" class="main-container grid js-masonry">
		<?php

		// Get all the posts.
		$args = array( 'posts_per_page' => -1 );
		$myposts = get_posts($args);

		foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<div class="col-33 base-padding-right double-margin-bottom grid-item">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="base-margin-top text-small"><?php the_title(); ?></div>
                    <div>
                        <?php
                        echo the_field ('captions')
                        ?>
                    </div>
				</a>
			</div>

		<?php endforeach; ?>


</div>

<?php posts_nav_link(); ?>



<?php

get_footer(); ?>
