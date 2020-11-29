<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Content -->
    <?php get_header( 'seo' ); ?>

    <!-- CDN -->
    <?php get_header( 'cdn' ); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="main-wrap">