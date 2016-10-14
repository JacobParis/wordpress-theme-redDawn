<?php if ( is_active_sidebar( 'home_1' ) ) : ?>

<div class="blog-sidebar-overlay hidden-xs">
</div>
<div class="blog-sidebar-overlay-xs visible-xs">
</div>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="row">
			<?php dynamic_sidebar( 'home_1' ); ?>
	</div>
</div><!-- /.blog-sidebar -->
<?php endif; ?>
