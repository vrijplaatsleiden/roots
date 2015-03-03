<article <?php post_class(); ?>>
<div class="page-image">
  <?php // check if the post has a Post Thumbnail assigned to it.
  if ( has_post_thumbnail() ) {
the_post_thumbnail();
  }?>
  </div>
  <header>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
