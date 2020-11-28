<?php get_header(); ?>

    <section class="top-banner">

        <div class="container banner-container text-center">
            <?php
            $args = array(
                'post_type' => 'banner',
                'posts_per_page' => 1,
                'order' => 'ASC',
            );

            $banner = new WP_Query($args) ?>
            <?php while ( $banner->have_posts() ) : $banner->the_post(); ?>
                <div class="banner-content">
                    <h2><?php echo get_post_meta( get_the_ID(), 'banner_h2', true )?></h2>
                    <p><?php echo get_post_meta( get_the_ID(), 'banner_p', true )?></p>
                </div>

                <div class="remaining-time">
                    <div class="time-content">
                        <div class="title">Remaining time</div>
                        <ul class="common-ul">
                            <li>
                                <time class="light-fontx">
                                    <?php echo get_post_meta( get_the_ID(), 'banner_time_day', true )?>
                                </time>
                                <div>Days</div>
                            </li>
                            <li>
                                <time class="light-fontx">
                                    <?php echo get_post_meta( get_the_ID(), 'banner_time_hour', true )?>
                                </time>
                                <div>Hours</div>
                            </li>
                            <li>
                                <time class="light-fontx">
                                    <?php echo get_post_meta( get_the_ID(), 'banner_time_min', true )?>
                                </time>
                                <div>Minutes</div>
                            </li>
                            <li>
                                <time class="light-fontx">
                                    <?php echo get_post_meta( get_the_ID(), 'banner_time_second', true )?>
                                </time>
                                <div>Seconds</div>
                            </li>
                        </ul>
                    </div>

                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>

    </section>

    <div class="h-200"></div>

    <section class="youth-forum">
        <div class="container forum-container">
            <div class="heading text-center">
                <h4 class="title-h4">The main objectives of the</h4>
                <h3 class="title-h3">4th Eastern Partnership <br>Youth Forum</h3>
            </div>

            <div class="content">
                <div id="objective_items" class="row content-row">
                    <?php
                    $obj_args = array(
                        'post_type' => 'objective',
                        'posts_per_page' => 5,
                        'order' => 'ASC',
                    );

                    $objectives = new WP_Query($obj_args) ?>
                    <?php while ( $objectives->have_posts() ) : $objectives->the_post(); ?>
                        <div class="col-md-4 content-item mb-3">
                            <div class="img-wrap">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <p class="para">
                                <?php echo get_the_content(); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
            <script type="text/javascript">
                $(function (){
                    let fourthItem = $('#objective_items .content-item:nth-child(4)');
                    let fifthItem = $('#objective_items .content-item:nth-child(5)');
                    fourthItem.removeClass('col-md-4').addClass('col')
                    fifthItem.removeClass('col-md-4').addClass('col')
                })
            </script>
            <div class="end-forum">
                <div class="end-forum-bg"></div>
            </div>
        </div>
    </section>

    <!--  Count section-->
    <section class="count-wrap">
        <div class="count-container container">
            <div class="row count-row">
                <?php
                $obj_args = array(
                    'post_type' => 'count',
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                );

                $counts = new WP_Query($obj_args) ?>
                <?php while ( $counts->have_posts() ) : $counts->the_post(); ?>

                    <div class="col-md-4 count-col text-center">
                    <div class="count-item">
                        <h2 class="light-font"><?php echo get_post_meta( get_the_ID(), 'count_number', true )?></h2>
                        <b><?php echo get_post_meta( get_the_ID(), 'count_type', true )?></b>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

    <!--    Big map-->
    <section class="big-map">
        <?php
        $obj_args = array(
            'post_type' => 'map',
            'posts_per_page' => 1,
            'order' => 'ASC',
        );

        $custom_map = new WP_Query($obj_args) ?>
        <?php while ( $custom_map->have_posts() ) : $custom_map->the_post(); ?>
            <div class="bm-container">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>

    <!--    Google map-->
    <!--    <section class="g-map">-->
    <!--        <div class="g-map-wrap">-->
    <!--The div element for the map -->
    <!--            <div id="map"></div>-->
    <!--        </div>-->
    <!---->
    <!--    </section>-->

    <?php
    $obj_args = array(
        'post_type' => 'forum',
        'posts_per_page' => 1,
        'order' => 'ASC',
    );

    $forum = new WP_Query($obj_args) ?>
    <?php while ( $forum->have_posts() ) : $forum->the_post(); ?>
        <!--    About forum mobile view-->
        <section id="about-forum-mv">
            <div class="container text-center mb-5 mt-5">
                <h4 class="title-h4"><?php the_title(); ?></h4>
                <h3 class="title-mid mb-5"><?php echo get_post_meta( get_the_ID(), 'forum_sub_title', true ); ?></h3>
                <div class="map-pattern-green mb-4" style="position: relative">
                    <?php the_post_thumbnail('full'); ?>
    <!--                <img src="--><?php //echo esc_url(get_template_directory_uri()) ?><!--/assets/images/forum-map.png"-->
    <!--                     alt="">-->
                </div>
                <div class="content text-left">
                    <p>
                        <?php echo get_the_content(); ?>
                    </p>
                    <a href="<?php echo get_post_meta( get_the_ID(), 'forum_details_link_url', true )?>">
                        <?php echo get_post_meta( get_the_ID(), 'forum_details_link_text', true )?>
                    </a>
                </div>
            </div>
        </section>
        <!--    About forum desktop view-->
        <section id="about-forum-lg" class="about-forum">
            <div class="container af-container">
                <div id="about-forum-row" class="af-row row">
                    <div class="map-col col-lg-6 mb-3">
                        <div id="about-forum" class="forum-map diamond-bg pattern-green">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </div>
                    <div class="content-col col-lg-6 mb-3">
                        <div class="content">
                            <h4 class="title-h4"><?php the_title(); ?></h4>
                            <h3 class="title-mid"><?php echo get_post_meta( get_the_ID(), 'forum_sub_title', true ); ?></h3>
                            <p>
                                <?php echo get_the_content(); ?>
                            </p>
                            <a href="<?php echo get_post_meta( get_the_ID(), 'forum_details_link_url', true )?>">
                                <?php echo get_post_meta( get_the_ID(), 'forum_details_link_text', true )?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php
    $obj_args = array(
        'post_type' => 'about_lithuania',
        'posts_per_page' => 1,
        'order' => 'ASC',
    );
    $info = new WP_Query($obj_args) ?>
    <?php while ( $info->have_posts() ) : $info->the_post(); ?>
        <!--    About Lithuania mobile view-->
        <section id="about-lithuania-mv" class="gray-bg">
            <div class="container text-center pb-5 mt-5">
                <h4 class="title-h4 pt-5"><?php the_title(); ?></h4>
                <h3 class="title-mid mb-5"><?php echo get_post_meta( get_the_ID(), 'info_sub_title', true ); ?></h3>

                <div class="map-pattern-blue mb-4">
                    <?php the_post_thumbnail('full'); ?>
                    <a class="play-btn" href="#"><i class="fa fa-play"></i></a>
                </div>


                <div class="content text-left">
                    <p>
                        <?php echo get_the_content(); ?>
                    </p>
                    <a href="<?php echo get_post_meta( get_the_ID(), 'info_details_link_url', true )?>">
                        <?php echo get_post_meta( get_the_ID(), 'info_details_link_text', true )?>
                    </a>
                </div>
            </div>
        </section>
        <!--    About Lithuania-->
        <section id="about-lithuania-lg" class="about-lithuania gray-bg">
            <div class="container af-container">
                <div id="about-lithuania-row" class="af-row row">

                    <div class="map-col col-lg-6">
                        <div class="content">
                            <h4 class="title-h4"><?php the_title(); ?></h4>
                            <h3 class="title-mid"><?php echo get_post_meta( get_the_ID(), 'info_sub_title', true ); ?></h3>
                            <p>
                                <?php echo get_the_content(); ?>
                            </p>
                            <a href="<?php echo get_post_meta( get_the_ID(), 'info_details_link_url', true )?>">
                                <?php echo get_post_meta( get_the_ID(), 'info_details_link_text', true )?>
                            </a>
                        </div>

                    </div>
                    <div class="content-col col-lg-6">
                        <div id="about-forum" class="forum-map">
                            <div class="pattern-blue">
                                <?php the_post_thumbnail('full'); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <!-- Moderator -->
    <section class="moderator" style="position:relative;">
        <div class="left-triangle"></div>
        <div class="right-triangle"></div>
        <div class="container m-container text-center">
            <div class="moderator-bg"></div>
            <h3 class="title-mid">Moderators and Facilitators</h3>
            <div class="row m-row">
                <?php
                $obj_args = array(
                    'post_type' => 'moderator',
                    'posts_per_page' => 2,
                    'order' => 'ASC',
                );
                $moderators = new WP_Query($obj_args) ?>
                <?php while ( $moderators->have_posts() ) : $moderators->the_post(); ?>
                    <div class="col-md-6 m-col mb-4">
                        <div class="card-item">
                            <div class="img-wrap">
                                <div class="mask">
                                    <?php the_post_thumbnail('full'); ?>
<!--                                    <img src="--><?php //echo esc_url(get_template_directory_uri()) ?><!--/assets/images/male.png"-->
<!--                                         alt="">-->
                                </div>

                                <img class="flag"
                                     src="<?php echo get_post_meta( get_the_ID(), 'mod_flag', true ) ?>"
                                     alt="">
                            </div>
                            <div class="content">
                                <h3><?php echo get_post_meta( get_the_ID(), 'mod_name', true )?></h3>
                                <span><?php echo get_post_meta( get_the_ID(), 'mod_type', true )?></span>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>

            <a href="#">Check all facilitators <i class="fa fa fa-long-arrow-right"></i></a>

            <!--            <div class="moderator-bg"></div>-->
        </div>
    </section>

    <!-- Organiser -->
    <section class="organiser">
        <div class="organiser-container container text-center">
            <h3 class="title-black">Organisers</h3>
            <div class="row m-row organiser-row align-items-center">
                <?php
                $obj_args = array(
                    'post_type' => 'organiser',
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                );

                $organiser = new WP_Query($obj_args) ?>
                <?php while ( $organiser->have_posts() ) : $organiser->the_post(); ?>
                    <div class="col-md-4 organiser-col mb-4">
                        <div class="img-wrap">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>


    <!-- Partners -->
    <section class="partners">
        <div class="partners-container container text-center">
            <h3 class="title-black">Partners</h3>
            <div class="custom-row">

                <?php
                $obj_args = array(
                    'post_type' => 'partners',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );

                $partners = new WP_Query($obj_args) ?>
                <?php while ( $partners->have_posts() ) : $partners->the_post(); ?>
                    <div class="item">
                        <div class="img-wrap">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>


    <?php get_footer(); ?>

