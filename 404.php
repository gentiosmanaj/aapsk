<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aapsk
 */

get_header();
?>

<main id="primary" class="notfound-page">
    <div class="container">
        <h2>404</h2>
        <p>Kërkojmë ndjesë faqja të cilen po e kërkoni
            nuk është gjetur.</p>
        <div class="buttons-wrapper">
            <a class="btn-outlined" href="<?php echo site_url(); ?>">Kthehu tek Ballina</a>
            <a class="btn" href="mailto:burim.preteni@rks-gov.net">Raporto Problem</a>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();