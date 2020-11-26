<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    <title>--><?php //the_title() || 'Eastern Partnership'; ?><!--</title>-->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKHLMWiIs_kLXWj4q40Pr_mtaJYbMfqrE&callback=initMap&libraries=&v=weekly"-->
<!--            defer></script>-->
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {lat: 56.263920, lng: 9.501785};
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: uluru,

            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
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
                            <time class="light-fontx">11</time>
                            <div>Days</div>
                        </li>
                        <li>
                            <time class="light-fontx">21</time>
                            <div>Hours</div>
                        </li>
                        <li>
                            <time class="light-fontx">24</time>
                            <div>Minutes</div>
                        </li>
                        <li>
                            <time class="light-fontx">19</time>
                            <div>Seconds</div>
                        </li>
                    </ul>
                </div>

            </div>

            <script>
                $(function (){

                })
            </script>
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
                <div class="row content-row">
                    <div class="col-md-4 content-item mb-3">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img1.png"
                                 alt="">
                        </div>
                        <p class="para">
                            To celebrate the 10th anniversary of European Union and Eastern Partnership cooperation,
                            highlight the impact and achievements;
                        </p>
                    </div>
                    <div class="col-md-4 content-item mb-3">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img2.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Provide opportunities for young people to contribute to the high level discussions about a
                            joint vision for European Union and Eastern Partnership cooperation, and to convey
                            recommendations to the Eastern Partnership Summit in 2020;
                        </p>
                    </div>
                    <div class="col-md-4 content-item mb-3">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img3.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Foster discussions and unity between delegates of European Union and Eastern Partnership
                            regions on the changing landscape of youth demands and youth policy;
                        </p>
                    </div>
                    <div class="col content-item align-self-centerx mb-3">
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
                    <div class="col content-item align-self-centerx mb-3">
                        <div class="img-wrap">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/youth-img5.png"
                                 alt="">
                        </div>
                        <p class="para">
                            Collect the opinions of young people on Critical thinking, media literacy and active
                            participation and inform the discussions of Eastern Partnership High level Summit in 2020.
                        </p>
                    </div>
                </div>
            </div>
            <div class="end-forum">
                <div class="end-forum-bg"></div>
            </div>
        </div>
    </section>

    <!--    Count section-->
    <section class="count-wrap">
        <div class="count-container container">
            <div class="row count-row">
                <div class="col-md-4 count-col text-center">
                    <div class="count-item">
                        <h2 class="light-font">250</h2>
                        <b>participants</b>
                        <p>
                            including active young people, youth workers and youth policy makers from both Eastern
                            Partnership
                        </p>
                    </div>
                </div>
                <div class="col-md-4 count-col text-center">
                    <div class="count-item">
                        <h2 class="light-font">34</h2>
                        <b>countries</b>
                        <p>European countries involved in the EU Erasmus+</p>
                    </div>
                </div>
                <div class="col-md-4 count-col text-center">
                    <div class="count-item">
                        <h2 class="light-font">3</h2>
                        <b>days</b>
                        <p>Programme — will meet and discuss in a two-day event in Vilnius, on 17-20 June 2018.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    Big map-->
    <section class="big-map">
        <div class="bm-container">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/big-map.jpg" alt="">
        </div>
    </section>

    <!--    Google map-->
    <!--    <section class="g-map">-->
    <!--        <div class="g-map-wrap">-->
    <!--The div element for the map -->
    <!--            <div id="map"></div>-->
    <!--        </div>-->
    <!---->
    <!--    </section>-->

    <!--    About forum mobile view-->
    <section id="about-forum-mv">
        <div class="container text-center mb-5 mt-5">
            <h4 class="title-h4">About Forum</h4>
            <h3 class="title-mid mb-5">We all will meet in Vilnius on 17-20 June 2019!</h3>
            <div class="map-pattern-green mb-4" style="position: relative">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/forum-map.png"
                     alt="">
<!--                <div class="pattern-green"></div>-->
            </div>
            <div class="content text-left">
                <p>
                    The event will gather youth and youth work representatives, around 250 participants: each
                    EaP country with 10 delegates from youth, organizations and institutions working with youth,
                    EaP Youth ambassadors network representatives, 34 “Erasmus+” programme countries with 2
                    delegates per country, team of facilitators and experts, other European Union, Council of
                    Europe, national agency and international youth organizations representatives.
                </p>
                <a href="#">Ežeraičių km., Ežeraičių g. 2, Vilnius, Lietuva LT-14200</a>
            </div>
        </div>
    </section>
    <!--    About forum desktop view-->
    <section id="about-forum-lg" class="about-forum">
        <div class="container af-container">
            <div id="about-forum-row" class="af-row row">
                <div class="map-col col-lg-6 mb-3">
                    <div id="about-forum" class="forum-map diamond-bg pattern-green">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/forum-map.png"
                             alt="">
                    </div>
                </div>
                <div class="content-col col-lg-6 mb-3">
                    <div class="content">
                        <h4 class="title-h4">About Forum</h4>
                        <h3 class="title-mid">We all will meet in Vilnius on 17-20 June 2019!</h3>
                        <p>
                            The event will gather youth and youth work representatives, around 250 participants: each
                            EaP country with 10 delegates from youth, organizations and institutions working with youth,
                            EaP Youth ambassadors network representatives, 34 “Erasmus+” programme countries with 2
                            delegates per country, team of facilitators and experts, other European Union, Council of
                            Europe, national agency and international youth organizations representatives.
                        </p>
                        <a href="#">Ežeraičių km., Ežeraičių g. 2, Vilnius, Lietuva LT-14200</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!--    <div class="media-test" style="background-color: #0c88b4">-->
<!--        <div id="page">-->
<!--            <h1>JavaScript Media Queries</h1>-->
<!---->
<!--            <p>Current design: <strong id="current">unknown</strong></p>-->
<!---->
<!--            <section>-->
<!--                <div class="element">element one</div>-->
<!--                <div class="element">element two</div>-->
<!--                <div class="element">element three</div>-->
<!--            </section>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->

<!--    <script type="text/javascript">-->
<!--        $(function () {-->
<!--            /* JavaScript Media Queries */-->
<!--            if (matchMedia) {-->
<!--                const mq = window.matchMedia("(max-width: 990px)");-->
<!--                mq.addListener(WidthChange);-->
<!--                WidthChange(mq);-->
<!--            }-->
<!---->
<!--            // media query change-->
<!--            function WidthChange(mq) {-->
<!--                if (mq.matches) {-->
<!--                    // window width is at least 500px-->
<!--                    alert(mq.media)-->
<!---->
<!--                    let box = $('#about-forum-row')-->
<!---->
<!---->
<!--                    let title = box.find('.title-mid')-->
<!--                    let sub_title = box.find('.title-h4')-->
<!--                    let para = box.find('p')-->
<!--                    let link = box.find('a')-->
<!--                    console.log(title)-->
<!---->
<!--                } else {-->
<!--                    alert('No match');-->
<!--                    // window width is less than 500px-->
<!--                }-->
<!---->
<!--                // const msg = (mq.matches ? "more" : "less") + " than 500 pixels";-->
<!--                // document.getElementById("current").firstChild.nodeValue = msg;-->
<!---->
<!--            }-->
<!---->
<!---->
<!---->
<!--            // Create a media condition that targets viewports at least 768px wide-->
<!--            const mediaQuery = window.matchMedia('( max-width: 990px )')-->
<!---->
<!--            // Note the `matches` property-->
<!--            if (mediaQuery.matches) {-->
<!--                console.log(mediaQuery);-->
<!--                let af_row = $('')-->
<!--            }-->
<!--        })-->
<!--    </script>-->


    <!--    About Lithuania mobile view-->
    <section id="about-lithuania-mv" class="gray-bg">
        <div class="container text-center pb-5 mt-5">
            <h4 class="title-h4 pt-5">About Lithuania</h4>
            <h3 class="title-mid mb-5">Lithuania is a country in Northern Europe</h3>

            <div class="map-pattern-blue mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/country-img.png"
                     alt="">
                <a class="play-btn" href="#"><i class="fa fa-play"></i></a>
            </div>


            <div class="content text-left">
                <p>
                    The official name of the country is the Republic of Lithuania. Lithuania
                    is situated on the eastern shore of the Baltic Sea and borders Latvia on the north,
                    Belarus on the east and south, and Poland and the Kaliningrad region of Russia on the
                    southwest. The official language is Lithuania.
                    Vilnius is the capital of Lithuania and its largest city. It is known for its baroque
                    architecture, seen especially in its medieval old town.
                </p>
                <a href="#">Find out more <i class="fa fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!--    About Lithuania-->
    <section id="about-lithuania-lg" class="about-lithuania gray-bg">
        <div class="container af-container">
            <div id="about-lithuania-row" class="af-row row">

                <div class="map-col col-lg-6">
                    <div class="content">
                        <h4 class="title-h4">About Lithuania</h4>
                        <h3 class="title-mid">Lithuania is a country in Northern Europe</h3>
                        <p>
                            The official name of the country is the Republic of Lithuania. Lithuania
                            is situated on the eastern shore of the Baltic Sea and borders Latvia on the north,
                            Belarus on the east and south, and Poland and the Kaliningrad region of Russia on the
                            southwest. The official language is Lithuania.
                            Vilnius is the capital of Lithuania and its largest city. It is known for its baroque
                            architecture, seen especially in its medieval old town.
                        </p>
                        <a href="#">Find out more <i class="fa fa fa-long-arrow-right"></i></a>
                    </div>

                </div>
                <div class="content-col col-lg-6">
                    <div id="about-forum" class="forum-map">
                        <div class="pattern-blue">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/country-img.png"
                                 alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moderator -->
    <section class="moderator" style="position:relative;">
        <div class="left-triangle"></div>
        <div class="right-triangle"></div>
        <div class="container m-container text-center">
            <div class="moderator-bg"></div>
            <h3 class="title-mid">Moderators and Facilitators</h3>
            <div class="row m-row">
                <div class="col-md-6 m-col mb-4">
                    <div class="card-item">
                        <div class="img-wrap">
                            <div class="mask">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/male.png"
                                     alt="">
                            </div>

                            <img class="flag"
                                 src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/male-flag.png"
                                 alt="">
                        </div>
                        <div class="content">
                            <h3>Marcus Vrecer</h3>
                            <span>Main moderator, Austria</span>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 m-col mb-4">
                    <div class="card-item">
                        <div class="img-wrap">
                            <div class="mask">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/female.png"
                                     alt="">
                            </div>
                            <img class="flag"
                                 src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/female-flag.png"
                                 alt="">
                        </div>
                        <div class="content">
                            <h3>Marcus Vrecer</h3>
                            <span>Main moderator, Austria</span>
                        </div>

                    </div>
                </div>
            </div>

            <a href="#">Check all facilitators <i class="fa fa fa-long-arrow-right"></i></a>

            <div class="moderator-bg"></div>
        </div>
    </section>

    <!-- Organiser -->
    <section class="organiser">
        <div class="organiser-container container text-center">
            <h3 class="title-black">Organisers</h3>
            <div class="row m-row organiser-row align-items-center">
                <div class="col-md-4 organiser-col mb-4">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/organizer-1.png"
                             alt="">
                    </div>
                </div>
                <div class="col-md-4 organiser-col mb-4">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/organizer-2.png"
                             alt="">
                    </div>
                </div>
                <div class="col-md-4 organiser-col mb-4">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/organizer-3.png"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="partners">
        <div class="partners-container container text-center">
            <h3 class="title-black">Partners</h3>
            <div class="custom-row">
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-1.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-2.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-3.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-4.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-5.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-6.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-7.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-8.png"
                             alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/partner-9.png"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <footer class="footer">
        <div class="footer-container container">
            <div class="row align-items-center footer-row">
                <div class="col-7 col-md-8 col-xl-9 f-left-col">
                    <div class="copyright">© Lorem ipsum 2010 - 2019</div>
                </div>
                <div class="col-5 col-md-4 col-xl-3 f-right-col text-right">
                    <ul class="common-ul f-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


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

