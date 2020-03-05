<?php get_header() ?>
    <div id="main-content" class="container">
        <?php 
            if(is_singular()) {
                get_template_part('template-parts/post/content', 'single');
            }
            else{
                echo '<div class="row">';
                    while(have_posts()){
                        the_post();
                        //get_template_part('template-parts/post/content');
                    }
                echo '</div>';
            }        
        ?>
    </div>
<?php get_footer() ?>