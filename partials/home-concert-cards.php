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
endif;
?>