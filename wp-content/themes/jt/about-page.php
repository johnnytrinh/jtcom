<?php
/**
 * Template Name: About page
 *
 * @package WordPress
 * @subpackage Interbrand
 * @since 2016
 */

get_header(); ?>

<div class="main-container">
	<div class="col-50 base-padding-right leading-medium">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		else:
		endif;

		?>
	</div>

	<div class="col-50 base-padding-left base-padding-right leading-medium">
		<?php
			echo the_field ('second_column')
	    ?>
	</div>

</div>


<?php

get_footer(); ?>
