<?php

/**
 * Template part for displaying latest news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEB_ShA
 */

?>
<div>
    <h2><?php echo get_field('latest_news_title') ?></h2>
    <div class="posts-wrapper">
        <?php

$args = array(
    'posts_per_page' => 3, /* how many post you need to display */
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
            <a href="<?php the_permalink(); ?>" imgsource='<?php echo  get_the_post_thumbnail_url(); ?>'
                class="post-title on-hover-img"><?php echo mb_strimwidth( get_the_title(), 0, 30, '...' ); ?></a>
            <a href="<?php the_permalink(); ?>"
                class="post-excerpt"><?php echo wp_trim_words( get_the_content(), 20, '...' );  ?></a>

        </div>

        <?php
    endwhile;
endif;
wp_reset_postdata(); 
?>
    </div>

    <?php 
$link = get_field('all_news_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn" href="<?php echo esc_url( $link_url ); ?>"
        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
</div>