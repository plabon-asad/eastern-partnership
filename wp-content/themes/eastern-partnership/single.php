<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="container post-container text-center">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <h4><?php echo get_the_content(); ?></h4>

            <?php get_template_part('template-parts/post/content', get_post_format()); ?>
            <?php
//            the_post_navigation(
//                array(
//                    'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentyseventeen') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . '</span>%title</span>',
//                    'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'twentyseventeen') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . '</span></span>',
//                )
//            );
            ?>

        <?php endwhile; ?>


    </div>

<?php
get_footer();
