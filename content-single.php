<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
	<?php the_content(); ?>

	<?php
    do_action('display_featured_post', $post->ID);
    ?>
	</div>
</div><!-- /.blog-post -->
