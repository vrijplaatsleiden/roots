<?php
/*
Template Name: Front Template
*/
?>

<?php if(is_page($page) ) { 
  get_template_part('templates/page', 'header'); 
  get_template_part('templates/content', 'page'); 
} 

if( is_paged() ) { get_template_part('templates/archive', 'header');   } ?>


<?php query_posts($query_string . "&order=DESC"); ?>

<div class="postings">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
       <ul class="pagination">
 <?php page_navi(); ?>
</ul>
  </nav>
<?php endif; ?>

