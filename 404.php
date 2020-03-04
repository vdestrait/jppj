<?php get_header(); ?>

<div class="content-404 container">
    <span>ERREUR 404</span>
    <h1>Zut, flûte et re-flûte !! <br>C'est cassé...</h1>
    <p><a href="<?php echo home_url(); ?>">Retour à la page d'accueil</a></p>
</div>

<h2>Suggestions :</h2>
<?php
    $req = explode('/',$_SERVER['REQUEST_URI']);
    $keyword = $req[count($req)-1];

    $query = new WP_Query([
        's' => $query
    ]);
?>

<?php
while($query->have_posts()) { $query->the_post();?>
    <?php get_template_part('template-parts/post/content'); ?>
<?php } ?>



<?php get_footer(); ?>