<?php
/**
 * The template for displaying all auctions posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aapsk
 */

get_header();
?>

<main id="primary" class="site-main single-auctions">
    <div class="container">
        <h2><?php echo get_the_title(); ?></h2>
        <div class="auction">
            <div class="title">
                <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M27.125 8.719v18.406A3.875 3.875 0 0 1 23.25 31h-1.938v-1.938h1.938a1.937 1.937 0 0 0 1.938-1.937V8.719h-3.875a2.906 2.906 0 0 1-2.907-2.906V1.938H7.75a1.937 1.937 0 0 0-1.938 1.937v17.438H3.875V3.875A3.875 3.875 0 0 1 7.75 0h10.656l8.719 8.719ZM3.1 22.959H0v7.748h1.533v-2.6h1.555c.556 0 1.03-.11 1.419-.335.393-.227.693-.533.897-.918.21-.405.318-.856.312-1.312 0-.484-.103-.922-.306-1.312a2.278 2.278 0 0 0-.892-.924c-.387-.232-.858-.347-1.418-.347Zm1.056 2.583a1.54 1.54 0 0 1-.165.736 1.113 1.113 0 0 1-.46.467 1.539 1.539 0 0 1-.727.16H1.527V24.18h1.278c.423 0 .754.116.992.35.239.237.359.574.359 1.012Zm2.358-2.583v7.748h2.829c.777 0 1.422-.155 1.933-.459a2.81 2.81 0 0 0 1.153-1.335c.252-.58.38-1.282.38-2.1 0-.814-.126-1.507-.38-2.083a2.763 2.763 0 0 0-1.141-1.317c-.512-.303-1.16-.454-1.947-.454H6.514Zm1.532 1.25h1.091c.48 0 .872.097 1.18.295.32.209.561.518.686.88.153.389.229.875.229 1.458.006.387-.039.772-.132 1.147a2.208 2.208 0 0 1-.38.818 1.55 1.55 0 0 1-.647.488 2.513 2.513 0 0 1-.936.159h-1.09v-5.245Zm7.253 3.416v3.082h-1.531V22.96h4.937v1.266h-3.406v2.164h3.111v1.236H15.3Z"
                        fill="#000" />
                </svg><a href="<?php the_field('file'); ?>"><?php echo get_the_title(); ?></a>
            </div>
            <?php if( get_field('file') ): ?>
            <a href="<?php the_field('file'); ?>" class="btn">Shkarko</a>
            <?php endif; ?>

        </div>
    </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();