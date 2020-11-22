<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <title>--><?php //the_title() || 'Eastern Partnership'; ?><!--</title>-->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="main-wrap">
    <section class="top-banner">
        <div class="container banner-container text-center">
            <div class="banner-content">
                <h2>Eastern Partnership <br> Youth Forum</h2>
                <p>We all will meet in Vilnius on 17-20 June 2019!</p>
            </div>

            <div class="remaining-time">
                <div class="time-content">
                    <div class="title">Remaining time</div>
                    <ul class="common-ul">
                        <li>
                            <time>11</time>
                            <div>Days</div>
                        </li>
                        <li>
                            <time>21</time>
                            <div>Hours</div>
                        </li>
                        <li>
                            <time>24</time>
                            <div>Minutes</div>
                        </li>
                        <li>
                            <time>19</time>
                            <div>Seconds</div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <div class="h-190"></div>
    <section class="youth-forum">
        <div class="container forum-container">
            <div class="heading text-center">
                <h4>The main objectives of the</h4>
                <h3>4th Eastern Partnership <br>Youth Forum</h3>
            </div>

            <div class="content">
                <div class="row content-row">
                    <div class="col-md-4 content-item">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img1.png"
                                 alt="">
                        </div>
                        <p class="para">
                            To celebrate the 10th anniversary of European Union and Eastern Partnership
                            cooperation, highlight the impact and achievements;
                        </p>
                    </div>
                    <div class="col-md-4 content-item">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img2.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Provide opportunities for young people to contribute to the high level discussions about
                            a joint vision for European Union and Eastern Partnership cooperation, and to convey
                            recommendations to the Eastern Partnership Summit in 2020;
                        </p>
                    </div>
                    <div class="col-md-4 content-item">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img3.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Foster discussion and unity between delegates of European Union and Eastern Partnership
                            regions on the changing landscape of youth demands and youth policy;
                        </p>
                    </div>
                    <div class="col content-item align-self-center">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img4.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Encourage further cooperation, partnerships and good practice exchange among young people,
                            youth workers, organizations and institutions dealing with youth policy in European Union
                            and Eastern Partnership countries;
                        </p>
                    </div>
                    <div class="col content-item align-self-center">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img5.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Collect the opinions of young people on Critical thinking, media literacy and active
                            participation
                            and inform the discussions of Eastern Partnership High level Summit in 2020.
                        </p>
                    </div>


                </div>
            </div>
            <div class="end-forum">
                <div class="end-forum-bg"></div>
            </div>
        </div>
    </section>

    <section class="count-wrap">
        <div class="count-container container">
            <div class="row">
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</div>


<?php
if (have_posts()) :

    // Start the Loop.
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/post/content', get_post_format());

    endwhile;

else :

    get_template_part('template-parts/post/content', 'none');

endif;
?>
</body>
</html>

