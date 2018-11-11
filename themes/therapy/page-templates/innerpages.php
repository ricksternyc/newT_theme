<?php
/**
 * Template Name: Inner Pages
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="site-main" id="main" role="main">
    <section id="section-4">
        <div class="container-fluid">
            <div class="row">
           
                    <div class="header_background" style="background-image: url('<?php the_field('header_image'); ?>')">
                    <div class="content_overlay">
                        <div class="the_content">
                            <h1><?php the_field('header_text'); ?></h1>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </section>
    <section id="section-5">
            <div class="custom_area">
                <div class="custom_content">
                    <?php the_field('user_content'); ?>
                </div>
            </div>
    </section>
</main><!-- #main -->
<?php get_footer(); ?>
