<div class="page-image">
<?php // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}?>
</div>
<div class="page-header">
  <h1>
   <?php echo '(Pagina '.$page.' - archief)'; ?>
  </h1>
</div>
