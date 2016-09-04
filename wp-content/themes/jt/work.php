<?php
/**
 * Template Name: Work
 *
 * @package WordPress
 * @subpackage JT
 * @since 2016
 */

get_header(); ?>



<div class="main-container work">
    <div class="content-container">
        <div class="row is-flex">
            <?php
                query_posts(array(
                    'post_type' => 'work',
                    'showposts' => 10
                ) );
            ?>

            <?php while (have_posts()) : the_post(); ?>
            <div class="col-50">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="text-large base-margin-bottom"><h2><?php the_title(); ?></h2></div>
<!--                    <p>--><?php //echo get_the_excerpt(); ?><!--</p>-->
                </a>
            </div>

            <?php endwhile;?>
        </div>
    </div>
</div>

<?php posts_nav_link(); ?>



<?php

get_footer(); ?>
