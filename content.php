<div class="blog-post">
  <h2 class="blog-post-title">
    <a class="h2" href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <?php if ( has_post_thumbnail() ) {?>
  <div class="row">
    <div class="col-md-4"><?php   the_post_thumbnail('thumbnail'); ?></div>
    <div class="col-md-6"><?php the_excerpt(); ?></div>
  </div>
  <?php } ?>
</div>
<!-- /.blog-post -->
