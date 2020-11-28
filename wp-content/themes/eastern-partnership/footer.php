
<!-- Footer -->
<footer class="footer">
    <div class="footer-container container">
        <?php
        $obj_args = array(
            'post_type' => 'footer',
            'posts_per_page' => 1,
            'order' => 'ASC',
        );
        $footer_items = new WP_Query($obj_args) ?>
        <?php while ( $footer_items->have_posts() ) : $footer_items->the_post(); ?>
            <div class="row align-items-center footer-row">
                <div class="col-7 col-md-8 col-xl-9 f-left-col">
                    <div class="copyright"><?php echo get_post_meta( get_the_ID(), 'footer_copyright', true )?></div>
                </div>
                <div class="col-5 col-md-4 col-xl-3 f-right-col text-right">
                    <ul class="common-ul f-social">
                        <li>
                            <a href="<?php echo get_post_meta( get_the_ID(), 'footer_fb_url', true )?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_post_meta( get_the_ID(), 'footer_instagram_url', true )?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </div>
</footer>


</div>

<?php
//if (have_posts()) :
//
//    // Start the Loop.
//    while (have_posts()) :
//        the_post();
//        get_template_part('template-parts/post/content', get_post_format());
//
//    endwhile;
//
//else :
//
//    get_template_part('template-parts/post/content', 'none');
//
//endif;
//?>
</body>
</html>