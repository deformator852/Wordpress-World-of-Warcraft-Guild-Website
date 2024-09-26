<?php
// Template Name: Post Detail
?>
<?php get_header(); ?>
<main class="main">
	<div class="menu">
		<a href="<?php echo home_url(); ?>" class="menu-link">Home</a>
		<a href="<?php echo home_url() . "/gallery"; ?>" class="menu-link">Gallery</a>
		<a href="<?php echo home_url() . "/guild-rules"; ?>" class="menu-link">Guild Rules</a>
		<a href="<?php echo home_url() . "/recruitment"; ?>" class="menu-link">Recruitment</a>
		<a href="<?php echo home_url() . "/contact"; ?>" class="menu-link">Contact</a>
	</div>
	<div class="content post-detail">
		<?php
		global $post;
		$post_id = get_queried_object_id();
		$post = get_post($post_id);
		?>
		<div class="post">
			<div class="post-link">
				<a href="#"><?php the_title(); ?></a>
			</div>
			<div class="underline"></div>
			<div class="post-date">
				<p><img src="<?php bloginfo("template_url") ?>/assets/images/date.png" alt="date" /> <?php echo get_the_date("F,j,Y"); ?></p>
			</div>
			<div class="underline"></div>
			<div class="post-content">
				<?php the_post_thumbnail([783, 483]); ?>
				<div class="post-text">
					<?php the_content() ?>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
	</div>
</main>

<?php get_footer(); ?>