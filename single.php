<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aapsk
 */

get_header();
?>

<main id="primary" class="site-main single-post">
    <div class="thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <h2><?php echo get_the_title(); ?></h2>
            <?php echo get_the_content(); ?>
        </div>
    </div>
    <div class="related_posts">
        <div class="container">
            <?php
    $RelatedPosts = new WP_Query( array('orderby' => 'rand', 'posts_per_page' => '3','post__not_in' => array( $post->ID )));
      if ($RelatedPosts->have_posts()) :
          while ( $RelatedPosts->have_posts()) :  $RelatedPosts->the_post(); ?> <div class="related-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br />
                    <h3 class="post-title"><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words( get_the_content(), 14, '...'  ); ?></p>
                <a class="btn" href="<?php the_permalink(); ?>"><?php pll_e('Lexo më shumë'); ?></a>
            </div>
            <?php endwhile;
          else :
      endif;
wp_reset_postdata(); ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();