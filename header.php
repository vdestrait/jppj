<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title('-') ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Carme" />
    <!-- <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#navbar" data-offset="0">
    <nav class="navbar navbar-expand-lg">
        <a href="<?php get_home_url();?>">
            <img id="brand-logo" src="<?php bloginfo('template_url');?>/assets/img/jppj-logo-black.svg">
        </a>
        <div class="collapse navbar-collapse" id="navbar">
            <?php wp_nav_menu([
                'theme_location' => 'primary_menu',
                'menu_id' => 'menu-main'
            ]) ?>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <img id="burger-menu" src="<?php bloginfo('template_url');?>/assets/img/white-menu.svg"/>
        </button>
    </nav>

    <header style="color: #<?php echo get_header_textcolor() ?>;background-image: url('<?php echo get_header_image() ?>')">
        <div class="opacity-layer"></div>
            <div class="site-title">
                <?php the_custom_logo(); ?>
            </div>
            <img class="arrow-down" src="<?php bloginfo('template_url');?>/assets/img/white-expand-arrow.png" alt="">
            <figure class="video">
                <video controls src="<?php the_field('video'); ?>"></video>
                <img class="close-video" src="<?php bloginfo('template_url');?>/assets/img/close.png">
            </figure>
            <div class="video-player" data-toggle="tooltip" data-placement="right" title="Lancer la video">
                <img src="<?php bloginfo('template_url');?>/assets/img/white-filled-play.png" alt="">
            </div>
        
    </header>

    <main>

        

        
        


    