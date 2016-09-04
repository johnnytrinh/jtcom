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

            <div class="featured-image">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="row">
                <div class="col-100 text-large double-margin-top base-margin-bottom">
                    <h1><?php the_field('client'); ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-100">
                    <div class="base-margin-bottom text-small leading-medium">
                        <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                        else:
                        endif;?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-100 base-margin-bottom">
                    <?php

                     $field_name = "link";
                     $field = get_field_object($field_name);

                    if(get_field('link') ):
                        echo $field['label'] . ': ' . '<a href="' . $field['value'] .'" target="_blank">' . $field['value'] . '</a>';
                    else:
                        //empty
                    endif;

                        ?>
                </div>
            </div>

            <div class="row">
                <div class="col-100 quad-margin-bottom">
                    <?php

                    $field_name = "credits";
                    $field = get_field_object($field_name);

                    if(get_field('credits') ):
                        echo $field['label']  . ': ' . $field['value'] . '</a>';
                    else:
                        //empty
                    endif;

                    ?>
                </div>
            </div>

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

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
