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