<?php
/**
 * Template Name: Work Single
 *
 * @package WordPress
 * @subpackage JT
 * @since 2016
 */

get_header(); ?>

    <div class="main-container">
        <main id="main" class="site-main" role="main">


            <?php

            //images
            $images = get_field('images');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
<!--                       <a href="--><?php //echo $image['url']; ?><!--">-->
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<!--                        </a>-->
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="text-large base-margin-top base-margin-bottom"><h1><?php echo the_title(); ?></h1></div>


            <div class="col-75">
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
