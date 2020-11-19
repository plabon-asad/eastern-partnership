<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <title>--><?php //the_title() || 'Eastern Partnership'; ?><!--</title>-->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="main-wrap">
    <section class="top-banner">
        <div class="container banner-container"></div>
    </section>
</div>
<h1>Lorem Ipsum is simply dummy text</h1>
<p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
    Lorem Ipsum.
</p>


<?php
			if ( have_posts() ) :

				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
</body>
</html>

