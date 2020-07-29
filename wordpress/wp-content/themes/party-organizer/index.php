<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row">

        <?php while (have_posts()) : the_post(); ?>
            <div class="card" style="width: 18rem;">
                <?php the_post_thumbnail('medium', ['class'=>'card-img-top', 'alt'=>get_the_post_thumbnail_caption(), 'style'=>'height:auto']) ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php the_category(' ') ?></h6>
                    <p class="card-text"><?php the_content('voir plus') ?></p>
                </div>
            </div>
        <?php endwhile ?>

    </div>
<?php else : ?>

    <h1>pas de post</h1>

<?php endif; ?>

<?php get_footer() ?>