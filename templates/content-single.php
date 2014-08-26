<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <div class="page-image">
      <?php // check if the post has a Post Thumbnail assigned to it.
      if ( has_post_thumbnail() ) {
          the_post_thumbnail();
      }?>
      </div>
    <header class="page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content page-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
