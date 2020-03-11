<?php get_header(); ?>
    
    <section id="intro" class="menu-color-primary">
        <div class="container">
            <h1><?php bloginfo('description') ?></h1>

            <?php if(get_the_content()): ?>
                <div class="container">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="agenda">
        <a class="target" name="concert"></a>
        
        <?php get_template_part('partials/home-agenda','null'); ?>

    </section>

    <section id="concert">
        <div class="container">

            <?php get_template_part('partials/home-concert-cards','null'); ?>
            
        </div>
    </section>

    <section id="listening">
        <a class="target" id="ecouter"></a>
            
        <?php get_template_part('partials/home-listening','null'); ?>
        
    </section>

    <section id="history" class="menu-color-primary">
        <a class="target" name="histoire"></a>
        <h2><?php the_field('history_title'); ?></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="bcg-wrap">
                        <div class="bcg-img" style="background-image: url('<?php the_field('history_image'); ?>');">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <?php the_field('history_text'); ?>

                </div>
            </div>            
        </div>
    </section>



<?php get_footer(); ?>