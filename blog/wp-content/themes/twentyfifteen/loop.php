<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="section">
		<div class="container">
			<div class="row"><div class="col-md-6 hidden-sm hidden-xs">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(420,420),"class=img-responsive img-rounded"); ?>
						</a>
					<?php endif; ?>
<!--					<img src="/images/exp_dmi3cafe.png" class="img-responsive img-rounded">-->
				</div>                    <div class="col-md-6">
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<h3>Backend & Mobile Android developer</h3>
					<p>		<?php the_content() // Build your custom callback length in functions.php ?>
                    </p>
                    <p class="text-right"> <b class="date text-right"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></b></p>
					<a class="btn btn-primary right " style="float:right" href="http://fourplaces.com/"><span class="badge"><?php echo $post->comment_count?></span> More</a>
                    <?php edit_post_link(); ?>
				</div>                </div>
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
