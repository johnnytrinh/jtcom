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
    <div id="about" class="content-container">
<!--    <h1>--><?php //echo get_the_title(); ?><!--</h1>-->

    <!--intro-->
    <div class="row">
        <div class="col-100 text-large leading-small double-margin-top quad-margin-bottom">

            <?php the_field('intro_text'); ?>

        </div>
    </div>

    <!--programming languages-->
    <div class="row is-flex">

        <div class="col-100">
            <h2>Skillset/Expertise</h2>
        </div>

        <?php

           /*programming languages*/
           echo '<div class="col-25 skills">';
                echo '<ul>';
                    $count = 0;
                    while (have_rows('programming_languages')) {
                      the_row();
                      if ($count > 0 && ($count % 7 == 0)) {
                        ?>
                      </ul>
             </div>

             <div class="col-25 skills">
                   <ul>
                    <?php }
                        ?>
                    <li><?php the_sub_field('programming_languages'); ?> </li>
                        <?php
                            $count++;
                        }
             echo  '</ul>';
                echo '</div>';



            /*version control software*/
            echo '<div class="col-25 skills">';
                echo '<ul>';

                        // check if the repeater field has rows of data
                if( have_rows('version_control_software') ):
                    // loop through the rows of data
                    while ( have_rows('version_control_software') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('version_control_software');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';



            /*cms*/
            echo '<div class="col-25 skills">';
                echo '<ul>';
                // check if the repeater field has rows of data
                if( have_rows('content_management_systems') ):
                    // loop through the rows of data
                    while ( have_rows('content_management_systems') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('content_management_systems');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';



    ?>
    </div>

    <div class="row is-flex">
        <?php

            /*databases*/
            echo '<div class="col-25 skills">';
                echo '<ul>';
                // check if the repeater field has rows of data
                if( have_rows('databases') ):
                    // loop through the rows of data
                    while ( have_rows('databases') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('databases');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';

            /*hosting*/
            echo '<div class="col-25 skills">';
                echo '<ul>';
                // check if the repeater field has rows of data
                if( have_rows('hosting') ):
                    // loop through the rows of data
                    while ( have_rows('hosting') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('hosting');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';


            /*methodology*/
            echo '<div class="col-25 skills">';
                echo '<ul>';
                // check if the repeater field has rows of data
                if( have_rows('methodology') ):
                    // loop through the rows of data
                    while ( have_rows('methodology') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('methodology');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';

            /*methodology*/
            echo '<div class="col-25 skills">';
                echo '<ul>';
                // check if the repeater field has rows of data
                if( have_rows('analytics') ):
                    // loop through the rows of data
                    while ( have_rows('analytics') ) : the_row();
                        // display a sub field value
                        echo '<li>'; the_sub_field('analytics');'</li>';
                    endwhile;
                else :
                    // no rows found
                endif;

                echo '</ul>';
            echo '</div>';

        ?>
    </div>

    <div class="row is-flex">
        <?php
        /*programming languages*/
        echo '<div class="col-25 skills">';
        echo '<ul>';
        $count = 0;
        while (have_rows('software')) {
        the_row();
        if ($count > 0 && ($count % 7 == 0)) {
        ?>
        </ul>
    </div>

        <div class="col-25 skills">
            <ul>
                <?php }
                ?>
                <li><?php the_sub_field('software'); ?> </li>
                <?php
                $count++;
                }
                echo  '</ul>';
                echo '</div>';
        ?>


    </div>




        </div>
</div>




<?php

get_footer(); ?>
