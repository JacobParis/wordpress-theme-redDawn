<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
	<?php the_content(); ?>

	<?php
    $link = get_post_meta($post->ID, 'Reddit Link', true);
      if($link) {
          $url      = "https://www.reddit.com/{$link}/_";
          $response = wp_remote_get( esc_url_raw( $url . ".json" ) );

          /* Will result in $api_response being an array of data,
          parsed from the JSON response of the API listed above */
          $api_response = json_decode( wp_remote_retrieve_body( $response ), true );
          $thread = $api_response[0]['data']['children'][0]['data'];

          echo '<a id="reddit" href="'.$url.'">';
					echo '  <div class="r-op">';
					echo '    <div class="r-slant"></div>';
					echo '    <div class="r-header r-meta">' . $thread['title'] . " :: " . $thread['author'] . '</div>';
					echo '    <div class="r-body">' . $thread['selftext'] . '</div>';
					echo '  </div>'; //Close .r-op

    			$comments = array_slice($api_response[1]['data']['children'],0,3);
    			foreach($comments as $commentHeader) {
      			$comment = $commentHeader['data'];
      			echo '<div class="r-comment">';
		        echo '  <div class="r-meta">' . $comment['author'] . '</div>';
		        echo '  <div class="r-body">' . $comment['body'] . '</div>';
		        echo '</div>';
    			}
					echo '</a>'; //Close #reddit
				}
    ?>
	</div>
</div><!-- /.blog-post -->
