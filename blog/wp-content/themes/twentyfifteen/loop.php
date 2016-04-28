<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="section">
		<div class="container">
			<div class="row" >
				<?php if ( has_post_thumbnail() & $post->ID%2 == 1) : // Check if thumbnail exists ?>
				<div class="col-md-6">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(420,420),"class=img-responsive img-rounded"); ?>
						</a>
				</div>
				<?php endif; ?>
				<div class="col-md-6">
					<h2>
						<?php the_title(); ?>
					</h2>
					<h4><?php _e( '', 'html5blank' ); the_category(', ');?></h4>
					<p>		<?php the_content() // Build your custom callback length in functions.php ?>
                    </p>
                    <p class="text-right"> <b class="date text-right"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></b></p>
					<a class="btn btn-default right " style="float:right" href="<?php the_permalink(); ?>"><span class="badge"><?php echo $post->comment_count?></span> More</a>
                    <?php edit_post_link(); ?>
				</div>
				<?php if ( has_post_thumbnail() & $post->ID%2 != 1) : // Check if thumbnail exists ?>
					<div class="col-md-6">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(420,420),"class=img-responsive img-rounded"); ?>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
