<?php
/**

 * Template Name: Auctions

 */

  
get_header(); ?>

<div class="auctions-page">
    <div class="container">
        <h2><?php echo get_field('title') ?></h2>
        <select name="dropdown" class="year-select" id="year-select" onchange="fetch()">
            <option value=""><?php echo esc_attr( __( pll_e('Viti') ) ); ?></option>

            <?php 
                $args = array(
                    'post_type'       => 'auctions_post',
                    'type'            => 'yearly',
                    'limit'           => '',
                    'format'          => 'custom', 
                    'before'          => '',
                    'after'           => '',
                    'show_post_count' => false,
                    'echo'            => 1,
                    'order'           => 'DESC'
                );
                wp_get_archives( $args );
            ?>

        </select>


        <div class="all-auctions" id="datafetch">
            <?php
        $my_query_args = array(
            'posts_per_page' => 9999,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'auctions_post',
            'post_status' => 'publish'
        );

        $my_query = new WP_Query($my_query_args);

        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="auction">
                <div class="title">
                    <a href="<?php the_field('file'); ?>"><?php echo get_the_title(); ?></a>
                </div>
                <?php if( get_field('file') ): ?>
                <a href="<?php the_field('file'); ?>" class="btn">Shkarko</a>
                <?php endif; ?>

            </div>

            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
        </div>

    </div>
</div>


<?php

get_footer();