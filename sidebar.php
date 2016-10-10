<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="row">


		<div class="col-xs-4 col-sm-6 sidebar-module">
			<h4>Archives</h4>
			<ol class="list-unstyled">
				<?php wp_get_archives('type=monthly'); ?>
			</ol>
		</div>

		<div class="col-xs-4 col-sm-6 sidebar-module">
			<h4>Elsewhere</h4>
			<ol class="list-unstyled">
				<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
				<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
			</ol>
		</div>

		<div class="col-xs-4 col-sm-12 sidebar-module sidebar-module-inset">
			<h4>About</h4>
			<p><?php the_author_meta( 'description' ); ?> </p>
		</div>
	</div>
</div><!-- /.blog-sidebar -->
