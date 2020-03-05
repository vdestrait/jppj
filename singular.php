<?php
/**
 * Singular Template
 *
 * This is the default singular template.  It is used when a more specific template can't be found to display
 * singular views of posts (any post type).
 *
 */
    get_header(); ?>
        <div class="container">
            
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title();?></h1>

                    <div class="row mb-3">

                        <div class="col-md-6 concert-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <h5><?php the_field('date_time'); ?></h5>
                            <?php if(get_field('location')): ?>
                                <h5>Adresse :</h5>
                                <p><?php the_field('location'); ?></p>
                            <?php endif; ?>
                            <?php if(get_field('reservation')): ?>
                                <a href="<?php the_field('reservation'); ?>" target="_blank">R&eacute;servations<img class="link-icon" src="<?php bloginfo('template_url');?>/assets/img/external-link.svg"></a>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-12 mt-5 mb-5">
                            <?php the_field('text'); ?>
                            <a class="back-blog" href="<?php bloginfo('url');?>">
                            <img class="back-icon" src="<?php bloginfo('template_url');?>/assets/img/left-secondary.png"> Retour à l'accueil</a>
                        </div>

                    </div> <!-- /row -->

                <?php endwhile; ?>

            <?php else : ?>

                <?php //get_template_part( 'loop/loop-error' ); ?>

            <?php endif; ?>

        </div> <!-- /container -->
<?php get_footer(); ?>