<?php

/**
 * Template part for displaying slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEB_ShA
 */

?>
<div>
    <div id="home-slider">

        <?php
        $my_query_args = array(
            'posts_per_page' => 999,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'slider_post',
            'post_status' => 'publish'
        );

        $my_query = new WP_Query($my_query_args);

        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="home-slider-content">
            <div class="gradient">
                <div class="center">
                    <h1><?php echo get_field('slider_title'); ?></h1>
                    <p><?php echo get_field('slider_description') ?></p>
                </div>
                <img src="<?php echo get_field('slider_image'); ?>" alt="">
            </div>
        </div>


        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

</div>