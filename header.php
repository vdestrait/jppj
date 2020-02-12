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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
        <nav>
            <img id="brand-logo" src="<?php bloginfo('template_url');?>/assets/img/jppj-logo-black.svg">
            <?php wp_nav_menu([
                'theme_location' => 'primary_menu',
                'menu_id' => 'menu-main'
            ]) ?>
        </nav>

        <header style="color: #<?php echo get_header_textcolor() ?>;background-image: url('<?php echo get_header_image() ?>')">
            <div class="opacity-layer"></div>
                <div class="site-title">
                    <?php the_custom_logo(); ?>
                </div>
                <img class="arrow-down" src="<?php bloginfo('template_url');?>/assets/img/expand-arrow.png" alt="">
                <figure class="video">
                    <video controls src="<?php the_field('video'); ?>"></video>
                    <img class="close-video" src="<?php bloginfo('template_url');?>/assets/img/close.png">
                </figure>
                <div class="video-player">
                    <img src="<?php bloginfo('template_url');?>/assets/img/white-filled-play.png" alt="">
                </div>
            
        </header>

        

        
        


    