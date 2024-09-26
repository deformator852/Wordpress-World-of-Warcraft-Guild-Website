<?php
// Template Name: Guild Rules
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
	<div class="content">
		<div class="rules">
			<h2 class="rules__title">Guild Rules</h2>
			<div class="rights">
				<p class="rights__text"><strong>Rights<br></strong></p>
				<?php the_field("rights"); ?>
				<div class="rules-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/rules-image.webp" alt=""></div>
			</div>
			<div class="behavior">
				<p class="behavior__title"><strong>Behavior</strong><br></p>
				<?php the_field("behavior"); ?>
			</div>
			<div class="ranks">
				<p>
					<strong><br>Ranks</strong><br><br>
					<?php the_field("ranks"); ?>
				</p>
			</div>
			<div class="leadership">
				<p><strong><br>Leadership</strong><br></p>
				<?php the_field("leadership"); ?>
			</div>
			<div class="restrictions">
				<p><strong><br>Restrictions</strong><br></p>
				<?php the_field("restrictions"); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>