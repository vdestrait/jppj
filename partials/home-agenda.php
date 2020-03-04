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