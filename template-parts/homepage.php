<?php
/**

 * Template Name: Homepage

 */
get_header(); ?>

<div class="homepage">
    <div class="hero">
        <?php get_template_part('template-parts/slider') ?>
    </div>
    <div class="news-wrapper">
        <div class="container">
            <div class="post-thumbnail">
                <img src="" alt="" default="">
            </div>
            <div class="posts">
                <?php get_template_part('template-parts/latest-news') ?>
            </div>
        </div>
    </div>
    <div class="about-us-wrapper">
        <div class="container">
            <h2><?php echo get_field('about_us_title') ?></h2>
            <p><?php echo get_field('about_us_description') ?>
            </p>
        </div>
    </div>
    <div class="statistics-wrapper">
        <div class="container">
            <div class="icon-box">
                <div class="image">
                    <img src="<?php echo get_field('icon_box_image') ?>" alt="">
                </div>
                <div class="content">
                    <h3 class="number-count"><?php echo get_field('icon_box_title'); ?></h3>
                    <span><?php echo get_field('icon_box_description'); ?></span>
                </div>
            </div>
            <div class="icon-box">
                <div class="image">
                    <img src="<?php echo get_field('icon_box_image_1') ?>" alt="">
                </div>
                <div class="content">
                    <h3 class="number-count"><?php echo get_field('icon_box_title_1'); ?></h3>
                    <span><?php echo get_field('icon_box_description_1'); ?></span>
                </div>
            </div>
            <div class="icon-box">
                <div class="image">
                    <img src="<?php echo get_field('icon_box_image_2') ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo get_field('icon_box_title_2'); ?></h3>
                    <span><?php echo get_field('icon_box_description_2'); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="auction-wrapper">
        <div class="container">
            <div class="content" style="background-image:url('<?php echo get_field('auction_hammer') ?>');">
                <h2><?php echo get_field('auction_title') ?></h2>
                <?php 
            $link = get_field('auction_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn-secondary" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="director-wrapper">
        <div class="container">
            <p><?php echo get_field('director_contact'); ?></p>
        </div>
    </div>

</div>


<?php

get_footer();