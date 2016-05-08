<?php get_header(); ?>
<div id="pageContent">
    <?php while (have_posts()): the_post() ?>
        <div class="articleTitle"><?php the_title(); ?></div>

        <?php the_post_thumbnail(); ?>

        <div class="articleContent">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>