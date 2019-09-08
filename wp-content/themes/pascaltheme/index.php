<?php get_header(); ?>
<div id="main">
<section> 

    <?php if(have_posts()):?>
    <?php while (have_posts()):the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>"> 
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_the_date(); ?>à<?php get_the_time(); ?>
    <?php the_category(','); ?>
    <?php the_content('Lire la suite de cette entrée...'); ?>
    <?php the_author(); ?>
    </article>
<?php endwhile; ?>
<?php comments_popup_link('Aucun Commentaires','1 Commentaire','%Commentaires'); ?>
<?php next_post_link('&laquo; Article Précédent'); ?>
<?php previous_post_link('&raquo; Articles suivants'); ?>
<?php else: ?>
Non trouvé
<?php endif; ?>
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>