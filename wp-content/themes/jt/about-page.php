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
<!--            <h2>Skillset/Expertise</h2>-->
        </div>

        <?php

        /*Personal Skills*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Skills</div>';
        echo '<ul>';

        // check if the repeater field has rows of data
        if( have_rows('skills') ):
            // loop through the rows of data
            while ( have_rows('skills') ) : the_row();
                // display a sub field value
                echo '<li>'; the_sub_field('personal_skills');'</li>';
            endwhile;
        else :
            // no rows found
        endif;

        echo '</ul>';
        echo '</div>';



        /*Programming Languages*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Programming Languages/Frameworks</div>';
        echo '<ul>';

        // check if the repeater field has rows of data
        if( have_rows('programming_languages') ):
            // loop through the rows of data
            while ( have_rows('programming_languages') ) : the_row();
                // display a sub field value
                echo '<li>'; the_sub_field('programming_languages');'</li>';
            endwhile;
        else :
            // no rows found
        endif;

        echo '</ul>';
        echo '</div>';



        /*Software*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Software</div>';
        echo '<ul>';

        // check if the repeater field has rows of data
        if( have_rows('software') ):
            // loop through the rows of data
            while ( have_rows('software') ) : the_row();
                // display a sub field value
                echo '<li>'; the_sub_field('software');'</li>';
            endwhile;
        else :
            // no rows found
        endif;

        echo '</ul>';
        echo '</div>';

        /*Analytics*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Analytics</div>';
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



        /*VCS*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">VCS</div>';
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



        /*CMS*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Content Management Systems</div>';
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


        /*Databases*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Databases</div>';
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



        /*Infrastructure*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Infrastructure</div>';
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



        /*Metholodogies*/
        echo '<div class="col-25 skills">';
        echo '<div class="color-grey">Methodologies</div>';
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


        ?>


    </div>




        </div>
</div>




<?php

get_footer(); ?>
