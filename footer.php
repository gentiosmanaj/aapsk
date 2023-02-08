<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aapsk
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="widget" id="footer-widget1">
            <?php
                    if (is_active_sidebar('footer-widget-1')) {
                        dynamic_sidebar('footer-widget-1');
                    }
                    ?>
        </div>
        <div class="widget" id="footer-widget2">
            <?php
                    if (is_active_sidebar('footer-widget-2')) {
                        dynamic_sidebar('footer-widget-2');
                    }
                    ?>
        </div>
        <div class="widget" id="footer-widget3">
            <?php
                    if (is_active_sidebar('footer-widget-3')) {
                        dynamic_sidebar('footer-widget-3');
                    }
                    ?>
        </div>
    </div>
    <div class="below-footer">
        <div class="container">
            <div class="below-footer-widgets-wrapper">
                <div class="widget" id="footer-widget5">
                    <?php
                    if (is_active_sidebar('footer-widget-5')) {
                        dynamic_sidebar('footer-widget-5');
                    }
                    ?>
                </div>
                <div class="widget" id="footer-widget4">
                    <?php
                    if (is_active_sidebar('footer-widget-4')) {
                        dynamic_sidebar('footer-widget-4');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>