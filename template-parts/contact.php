<?php
/**

 * Template Name: Contact

 */

$facebook = get_theme_mod('aapsk_social_media_facebook');

$youtube = get_theme_mod('aapsk_social_media_youtube');
$email = get_theme_mod('aapsk_social_media_email');
$phone = get_theme_mod('aapsk_social_media_phone');

get_header(); ?>

<div class="contact-us">
    <div class="container">
        <div class="items">
            <div class="contact-information">
                <h2><?php echo get_the_title(); ?></h2>
                <p><?php echo get_field('location'); ?></p>
                <div class="social-items">
                    <a href="<?php echo $facebook ?>">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.16 0H0.84C0.375375 0 0 0.375375 0 0.84V20.16C0 20.6246 0.375375 21 0.84 21H20.16C20.6246 21 21 20.6246 21 20.16V0.84C21 0.375375 20.6246 0 20.16 0ZM17.7345 6.12937H16.0571C14.742 6.12937 14.4874 6.75412 14.4874 7.67287V9.69675H17.6269L17.2174 12.8651H14.4874V21H11.214V12.8678H8.47612V9.69675H11.214V7.3605C11.214 4.64887 12.8704 3.171 15.2906 3.171C16.4509 3.171 17.4457 3.25763 17.7371 3.297V6.12937H17.7345Z"
                                fill="#245285" />
                        </svg>

                    </a>

                    <a href="<?php echo $youtube ?>">
                        <svg width="33" height="22" viewBox="0 0 33 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M31.5619 3.93951C31.3816 3.29986 31.0303 2.72076 30.5454 2.26376C30.0468 1.7927 29.4357 1.45575 28.7698 1.28469C26.2775 0.631543 16.2927 0.631543 16.2927 0.631543C12.1301 0.584454 7.96854 0.791564 3.8315 1.2517C3.16557 1.4354 2.55561 1.77988 2.05589 2.25452C1.56487 2.72426 1.20922 3.30352 1.02343 3.93819C0.577126 6.32878 0.360282 8.75612 0.375819 11.1875C0.359894 13.6167 0.576206 16.0432 1.02343 18.4368C1.20524 19.0688 1.55956 19.6454 2.05191 20.1112C2.54425 20.577 3.15735 20.9135 3.8315 21.0916C6.35691 21.7434 16.2927 21.7434 16.2927 21.7434C20.4605 21.7906 24.6274 21.5835 28.7698 21.1233C29.4357 20.9522 30.0468 20.6153 30.5454 20.1442C31.0301 19.6873 31.381 19.1081 31.5606 18.4685C32.0185 16.0788 32.2412 13.6504 32.2254 11.2178C32.2599 8.77494 32.0375 6.33514 31.5619 3.93819V3.93951ZM13.1183 15.7054V6.67087L21.4258 11.1888L13.1183 15.7054Z"
                                fill="#245285" />
                        </svg>

                    </a>
                    <a href="mailto:<?php echo $email ?>">
                        <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.3 0H2.7C1.215 0 0.0135 1.18125 0.0135 2.625L0 18.375C0 19.8188 1.215 21 2.7 21H24.3C25.785 21 27 19.8188 27 18.375V2.625C27 1.18125 25.785 0 24.3 0ZM23.76 5.57812L14.2155 11.3794C13.7835 11.6419 13.2165 11.6419 12.7845 11.3794L3.24 5.57812C3.10463 5.50425 2.98609 5.40443 2.89155 5.28472C2.79701 5.16501 2.72843 5.0279 2.68998 4.88167C2.65152 4.73545 2.64398 4.58316 2.66781 4.43403C2.69164 4.28489 2.74635 4.14201 2.82863 4.01402C2.91091 3.88603 3.01904 3.77561 3.14648 3.68943C3.27392 3.60325 3.41803 3.54311 3.57007 3.51264C3.72211 3.48218 3.87893 3.48202 4.03104 3.51218C4.18315 3.54235 4.32738 3.6022 4.455 3.68812L13.5 9.1875L22.545 3.68812C22.6726 3.6022 22.8169 3.54235 22.969 3.51218C23.1211 3.48202 23.2779 3.48218 23.4299 3.51264C23.582 3.54311 23.7261 3.60325 23.8535 3.68943C23.981 3.77561 24.0891 3.88603 24.1714 4.01402C24.2536 4.14201 24.3084 4.28489 24.3322 4.43403C24.356 4.58316 24.3485 4.73545 24.31 4.88167C24.2716 5.0279 24.203 5.16501 24.1085 5.28472C24.0139 5.40443 23.8954 5.50425 23.76 5.57812Z"
                                fill="#245285" />
                        </svg>

                    </a>
                    <a href="tel:<?php echo $phone ?>">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 0C5.82029 0 0 5.82029 0 13C0 20.1797 5.82029 26 13 26C20.1797 26 26 20.1797 26 13C26 5.82029 20.1797 0 13 0ZM8.32812 5.16382C8.59597 5.14802 8.83807 5.30812 9.02161 5.59228L10.7989 8.96287C10.9861 9.36228 10.8797 9.78993 10.6006 10.0753L9.78651 10.8894C9.73626 10.9582 9.7032 11.0358 9.7024 11.1211C10.0146 12.3295 10.9616 13.4442 11.7972 14.2108C12.6327 14.9774 13.5307 16.0152 14.6964 16.2611C14.8405 16.3013 15.017 16.3157 15.1201 16.2199L16.0659 15.2566C16.3924 15.0091 16.8647 14.8892 17.2133 15.0916H17.2291L20.4362 16.9848C20.907 17.2798 20.9558 17.8502 20.6187 18.1972L18.4098 20.3887C18.0836 20.7232 17.6502 20.8357 17.2292 20.8362C15.367 20.7804 13.6074 19.8664 12.1622 18.9271C9.78987 17.2013 7.61382 15.0608 6.24769 12.4747C5.72375 11.3903 5.10826 10.0067 5.167 8.7963C5.17225 8.34095 5.29544 7.89486 5.61611 7.60136L7.82509 5.39238C7.99717 5.24595 8.1674 5.17331 8.32812 5.16382Z"
                                fill="#245285" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="map">
                <?php echo get_field('google_map'); ?>
            </div>
        </div>
    </div>

</div>


<?php

get_footer();