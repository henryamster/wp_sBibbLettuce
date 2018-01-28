<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */
get_header();
?>

<div id="primary" class="content-area">
    <div class="page-container">
   <aside id="page-widget-area" class="widget-area p-widget" role="complementary">
            <?php dynamic_sidebar('sidebar-3'); ?>
        </aside><!-- #page-widget-area -->
        <main id="main" class="site-main page-main" role="main">
            <?php
            while (have_posts()) : the_post();


                get_template_part('template-parts/content', 'page');


                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;


            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
     </div><!--.page-container-->
</div><!-- #primary -->

<?php
get_footer();
