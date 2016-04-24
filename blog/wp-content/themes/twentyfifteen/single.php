<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>Dmitriy Chaban dmi3coder personal website &amp; portfolio</title>
	<meta name="description" content="dmi3coder, android, java, akka, play, framework, startup">
	<meta name="keywords" content="dmi3coder, android, java, akka, play, framework, startup">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/style-blog" rel="stylesheet" type="text/css">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-74455808-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><span>Dmitriy Chaban</span></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-ex-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/">Home</a>
				</li>
				<li class="active">
					<a href="/blog">Blog</a>
				</li>
				<li>
					<a href="/contacts.php">Contacts</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="cover">
	<div id="cover-image" class="background-image-fixed cover-image" style="background-image : url('<?php echo get_the_post_thumbnail_url( $post, 'thumbnail' );?>')"></div>
	<div class="container">
		<div class="row">
			<div class="blackbg col-md-9 filterprogiddximagetransformmicrosoftgradientendcolorstrc0cfe2-startcolorstr='#ffffff',-gradienttype='0'); text-left">
				<h1 class="text-inverse"><?php the_title() ?></h1>
				<h3 class="text-inverse"><?php _e( '', 'html5blank' ); the_category(', ');?></h3>
			</div>
		</div>
	</div>
</div>

	<main role="main">
	<!-- section -->
	<section style="padding-right: 10%;padding-left: 10%">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1 style="text-align: center">
				<p><?php the_title() ?></p>
			</h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>
			<p class="text-right"> <b class="date text-right"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></b></p>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
