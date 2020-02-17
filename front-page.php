<?php get_header(); ?>
    
    <div class="container">
        <h1><?php bloginfo('description') ?></h1>

        <?php if(get_the_content()): ?>
            <div class="container">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>

    <section id="agenda">
        <a class="target" name="concert"></a>
        <div class="row concert-dates">
            <div class="col-md-4">
                <h2>Agenda</h2>
            </div>
            <div class="col-md-8 pt-4">
                <?php
                $currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")));
                $args = array( 
                        'meta_query'=> array(
                            array(
                                'key' => 'date_time',
                                'compare' => '>',
                                'value' => $currentdate,
                                'type' => 'DATE',
                            )),
                        'post_type' => 'concert',
                        'meta_key' => 'date_time',
                        'orderby' => 'meta_value_num',
                        'posts_per_page' => -1,
                        'order' => 'DESC' );
                        $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ):
                        $i=0;
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="pointer" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                                <span class="date"><?php the_field('date_time'); ?></span>
                                <h3><?php the_title(); ?></h3>
                            </div>
                           
                            <div class="modal fade" id="modal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                  <div class="modal-header">
                                    <h4 class="modal-title-<?php echo $i; ?>" id="modalCenterTitle"><?php the_title(); ?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true"><img class="close-icon" src="<?php bloginfo('template_url');?>/assets/img/close.png"></span>
                                    </button>
                                  </div>

                                  <?php the_post_thumbnail(); ?>

                                  <div class="modal-body">
                                    <?php the_field('text'); ?>
                                  </div>

                                  <div class="modal-footer">
                                    <?php if(get_field('reservation')): ?>
                                        <a href="<?php the_field('reservation'); ?>" target="_blank">R&eacute;servations<img class="link-icon" src="<?php bloginfo('template_url');?>/assets/img/external-link.svg"></a>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php 
                        $i++;
                    endwhile;
                    endif;  
                    wp_reset_query();?>
            </div>
        </div>
    </section>
    <section id="concert">
        <div class="container">

            <?php
            if( have_rows('concerts_cards') ):?>
                <div class="row no-gutters concerts-cards">
               
                <?php
                $count = count(get_field('concerts_cards'));
                
                while ( have_rows('concerts_cards') ) : the_row(); ?>
                    
                    <div class="col-xs-12 
                                <?php echo ($count === 4) ?  'col-md-6' : 'col-md-4' ;?> 
                                col-lg-4">
                         <div class="icon-wrap">
                            <img src="<?php the_sub_field('icon');?>">
                            <h4 class="thin"><?php the_sub_field('title');?></h4> 
                            <div class="arrow-down arrow-expanding d-md-none" alt=""></div>
                        </div>

                        <div class="card">
                            <div class="bcg-img" style="background-image: url('<?php the_sub_field('image');?>');"></div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_sub_field('title');?></h4>
                                    <p class="card-text"><?php the_sub_field('text');?></p>
                                </div>
                        </div>
                    </div>
                <?php 
                endwhile; ?>
                </div>
            <?php
            else :
            endif;?>
        </div>
    </section>

    <section id="listening">
        <a class="target" id="ecouter"></a>
        <div class="row">
            <div class="col-md-4">
                <h2>Du Son</h2>
            </div>
            <div class="col-md-8 pt-4">
                <?php
                if( have_rows('listening') ):?>
                    <div class="row">
                        <?php
                        while ( have_rows('listening') ) : the_row(); ?>
                            <div class="col-md-6 sounds">
                                <img class="music-icon" src="<?php bloginfo('template_url');?>/assets/img/dj.png">
                                <h4 class="thin"><?php the_sub_field('title');?></h4>
                                <audio controls src="<?php the_sub_field('audio'); ?>"></audio>
                            </div>
                        <?php 
                    endwhile; ?>
                </div>
                </div>
            <?php
            else :
            endif;?>
            </div>
        </div>
    </section>

    <section id="history">
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