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

            <div class="row">
            
                <div class="col-sm-10 col-sm-offset-1">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <div>

                                <h1><?php the_title();?></h1>

                                <?php the_content();?>
                                
                            </div>

                            
                        <?php endwhile; ?>


                        <a class="back-blog" href="<?php bloginfo('template_url');?>">&#8249;&#8249; Retour à l'accueil</a>


                    <?php else : ?>

                        Blabla

                        <?php //get_template_part( 'loop/loop-error' ); ?>

                    <?php endif; ?>

                </div> <!--/col-->

            </div> <!-- /row -->
        </div> <!-- /container -->
<?php get_footer(); ?>