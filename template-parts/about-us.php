<?php
/**

 * Template Name: About Us

 */
get_header(); ?>

<div class="about-us">
    <div class="container">
        <div class="content">
            <h2><?php echo get_field('title'); ?></h2>
            <p><?php echo get_field('about_description') ?></p>
        </div>
        <div class="content">
            <h3><?php echo get_field('mission_title'); ?></h3>
            <p><?php echo get_field('mision_description') ?></p>
        </div>
        <div class="content">
            <h3><?php echo get_field('composition_title'); ?></h3>
            <p><?php echo get_field('composition_description') ?></p>
        </div>
        <div class="content">
            <h3><?php echo get_field('agency_functions_title'); ?></h3>
            <p><?php echo get_field('agency_functions_description') ?></p>
        </div>
        <div class="button-wrapper">
            <?php 
            $link = get_field('organogram_button');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"
                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>

</div>


<?php

get_footer();