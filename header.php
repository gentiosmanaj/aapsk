<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aapsk
 */



$facebook = get_theme_mod('aapsk_social_media_facebook');
$youtube = get_theme_mod('aapsk_social_media_youtube');
$email = get_theme_mod('aapsk_social_media_email');
$phone = get_theme_mod('aapsk_social_media_phone');



?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css"
        rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="container">
                <div class="site-branding">
                    <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
			else :
				?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
			endif;
			$agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_description = get_bloginfo( 'description', 'display' );
			if ( $agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_description || is_customize_preview() ) :
				?>
                    <p class="site-description">
                        <?php echo $agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </p>
                    <?php endif; ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">

                    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                    <div class="language-switcher">
                        <?php pll_the_languages();  ?>
                    </div>
                </nav><!-- #site-navigation -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <div class="hamburger" id="hamburger-1">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </button>

            </div>
        </header><!-- #masthead -->
        <div class="subheader">
            <div class="container">
                <div class="items">
                    <div class="search">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="social-items">
                        <a href="<?php echo $facebook ?>">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.48 0H0.52C0.232375 0 0 0.232375 0 0.52V12.48C0 12.7676 0.232375 13 0.52 13H12.48C12.7676 13 13 12.7676 13 12.48V0.52C13 0.232375 12.7676 0 12.48 0ZM10.9785 3.79437H9.94012C9.126 3.79437 8.96838 4.18112 8.96838 4.74987V6.00275H10.9119L10.6584 7.96412H8.96838V13H6.942V7.96575H5.24712V6.00275H6.942V4.5565C6.942 2.87787 7.96737 1.963 9.46562 1.963C10.1839 1.963 10.7997 2.01662 10.9801 2.041V3.79437H10.9785Z"
                                    fill="white" />
                            </svg>
                        </a>

                        <a href="<?php echo $youtube ?>">
                            <svg width="20" height="13" viewBox="0 0 20 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.1919 2.0397C19.081 1.64607 18.8648 1.2897 18.5664 1.00847C18.2596 0.718586 17.8835 0.511228 17.4737 0.405965C15.94 0.00402651 9.79549 0.0040266 9.79549 0.0040266C7.2339 -0.0249514 4.67295 0.102501 2.12708 0.385665C1.71727 0.498705 1.34191 0.710696 1.03439 1.00278C0.732229 1.29185 0.513365 1.64832 0.399033 2.03889C0.124385 3.51002 -0.00905738 5.00377 0.000504027 6.5C-0.00929586 7.99488 0.123819 9.48814 0.399033 10.9611C0.510915 11.35 0.728962 11.7049 1.03194 11.9915C1.33492 12.2782 1.71222 12.4852 2.12708 12.5948C3.68118 12.996 9.79549 12.996 9.79549 12.996C12.3603 13.025 14.9245 12.8975 17.4737 12.6143C17.8835 12.5091 18.2596 12.3017 18.5664 12.0118C18.8647 11.7306 19.0806 11.3742 19.1911 10.9806C19.4729 9.51003 19.61 8.01566 19.6003 6.51867C19.6215 5.01534 19.4846 3.51393 19.1919 2.03889V2.0397ZM7.84204 9.28027V3.72053L12.9543 6.50081L7.84204 9.28027Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="mailto:<?php echo $email ?>">
                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.3 0H1.7C0.765 0 0.00849999 0.73125 0.00849999 1.625L0 11.375C0 12.2688 0.765 13 1.7 13H15.3C16.235 13 17 12.2688 17 11.375V1.625C17 0.73125 16.235 0 15.3 0ZM14.96 3.45312L8.9505 7.04437C8.6785 7.20687 8.3215 7.20687 8.0495 7.04437L2.04 3.45312C1.95477 3.40739 1.88013 3.3456 1.82061 3.27149C1.76108 3.19739 1.7179 3.11251 1.69369 3.02199C1.66948 2.93147 1.66473 2.8372 1.67973 2.74487C1.69474 2.65255 1.72919 2.5641 1.78099 2.48487C1.83279 2.40564 1.90088 2.33728 1.98112 2.28393C2.06136 2.23058 2.15209 2.19335 2.24782 2.17449C2.34355 2.15563 2.44229 2.15554 2.53806 2.17421C2.63383 2.19288 2.72464 2.22993 2.805 2.28312L8.5 5.6875L14.195 2.28312C14.2754 2.22993 14.3662 2.19288 14.4619 2.17421C14.5577 2.15554 14.6564 2.15563 14.7522 2.17449C14.8479 2.19335 14.9386 2.23058 15.0189 2.28393C15.0991 2.33728 15.1672 2.40564 15.219 2.48487C15.2708 2.5641 15.3053 2.65255 15.3203 2.74487C15.3353 2.8372 15.3305 2.93147 15.3063 3.02199C15.2821 3.11251 15.2389 3.19739 15.1794 3.27149C15.1199 3.3456 15.0452 3.40739 14.96 3.45312Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="tel:<?php echo $phone ?>">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0ZM5.125 3.17773C5.28983 3.16801 5.43881 3.26653 5.55176 3.4414L6.64551 5.51561C6.76067 5.7614 6.69523 6.02457 6.52344 6.20019L6.02247 6.70116C5.99155 6.74353 5.9712 6.79125 5.97071 6.84373C6.16283 7.5874 6.7456 8.27337 7.25979 8.74511C7.77395 9.21684 8.32657 9.85552 9.04395 10.0068C9.13261 10.0316 9.24124 10.0404 9.30469 9.98145L9.88672 9.38868C10.0876 9.2364 10.3783 9.1626 10.5928 9.28712H10.6025L12.5761 10.4522C12.8659 10.6337 12.8959 10.9847 12.6885 11.1983L11.3291 12.5469C11.1284 12.7527 10.8617 12.822 10.6026 12.8223C9.45659 12.7879 8.37379 12.2255 7.4844 11.6475C6.02453 10.5854 4.68543 9.26819 3.84473 7.67676C3.52231 7.00943 3.14355 6.15796 3.17969 5.41311C3.18292 5.13289 3.25873 4.85837 3.45607 4.67776L4.81544 3.31839C4.92133 3.22828 5.02609 3.18357 5.125 3.17773Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>