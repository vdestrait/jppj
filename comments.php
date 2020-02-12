<?php if(have_comments()){ ?>
    <?php echo get_comments_number(); ?>
    <?php wp_list_comments([
        'avatar_size' => 500
    ]); ?>
<?php } else {?>
    <p>Il n'y a actuellement aucun commentaire. N'hésitez pas à en poster un ci-dessous.</p>
<?php } ?>
<?php comment_form([
    'class_submit' => 'btn btn-dark',
    'class_form' => 'form-horizontal',
    'comment_field' => '
    <label for="content" class="control-label">Comment :</label>
    <div class="form-group">
        <textarea id="content" class="form-control" name"content" rows="10"></textarea>
    </div>'
]); ?>