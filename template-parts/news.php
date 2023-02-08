<?php
/**

 * Template Name: All News

 */
get_header(); ?>

<div class="news">
    <div class="container">

        <div class="posts-wrapper">
            <?php

$args = array(
    'posts_per_page' => 999, /* how many post you need to display */
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post', /* your post type name */
    'post_status' => 'publish'
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
            <div class="post-description">
                <a href="<?php the_permalink(); ?>" class="thumbnail"><img
                        src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>

                <div class="content">
                    <a href="<?php the_permalink(); ?>" class="post-title"><?php echo get_the_title(); ?></a>
                    <span class="date"><?php echo get_the_date(); ?></span>
                    <a href="<?php the_permalink(); ?>"
                        class="post-excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' );  ?></a>
                    <a href="<?php the_permalink(); ?>" class="btn"><?php pll_e('Më shumë'); ?></a>
                </div>

            </div>

            <?php
    endwhile;
endif;
wp_reset_postdata(); 
?>
        </div>
    </div>
</div>


<?php

get_footer();