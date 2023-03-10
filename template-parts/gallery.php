<?php
/**

 * Template Name: Gallery

 */
get_header(); ?>

<div class="gallery-page">
    <div class="container">
        <h2><?php echo get_the_title(); ?></h2>
        <div class="gallery-items">
            <?php
    $images = acf_photo_gallery('gallery', $post->ID);
    if( count($images) ):
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
        
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
            <div class="single-gallery-image">
                <div class="thumbnail">

                    <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>"
                        <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                        <a href="<?php echo $full_image_url; ?>" data-featherlight="image">
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>"
                                title="<?php echo $title; ?>">
                        </a>
                        <?php if( !empty($url) ){ ?></a><?php } ?>

                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>


<?php

get_footer();