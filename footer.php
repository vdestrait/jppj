    <footer>
        <a class="target" id="contact"></a>
        <div class=" container">
            <h3>Contact</h3>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h4>Ecrivez-nous !</h4>
                    <?php dynamic_sidebar( 'footer_sidebar' ); ?>
                </div>
                <div class="col col-xs-12">
                    <div class="socials">
                        <a href="https://www.facebook.com/jppjchorale" target="_blank" data-toggle="tooltip" data-placement="top" title="Suivez-nous sur Facebook !">
                            <img src="<?php bloginfo('template_url');?>/assets/img/filled-facebook.svg">
                        </a>
                        <a href="https://www.instagram.com/jppjchorale/" target="_blank" 
                         data-toggle="tooltip" data-placement="auto" title="Suivez-nous sur Instaram ! ">
                            <img src="<?php bloginfo('template_url');?>/assets/img/filled-instagram.svg">
                        </a>
                       
                    </div>
                    <div class="footer-menu-wrap">
                        <?php wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'menu_id' => 'menu-footer'
                        ]) ?>
                    </div>
                </div>
            </div>
            
            <small><span class="copy">&copy;</span> JPPJ Chorale | <?php echo date ( 'Y' ); ?></small>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/html" src="./assets/js/main.js"></script>
    <?php wp_footer() ?>
</body>
</html>