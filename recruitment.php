<?php
// Template Name: Recruitment
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$character_name = sanitize_text_field($_POST["character_name"]);
	$email = sanitize_email($_POST["email"]);
	$want_to_join = sanitize_textarea_field($_POST["want_to_join"]);
	$class = sanitize_text_field($_POST["class"]);
	echo "<h1>Work</h1>";
	if (!(empty($character_name)) && !(empty($email)) && !(empty($class))) {
		$to = get_option("admin_email");
		$subject = "Recruitment message";
		$headers = ['Content-Type: text/html; charset=UTF-8'];
		$body = "
		<p><strong>Character name: </strong> $character_name</p>
		<p><strong>Email: </strong> $email</p>
		<p><strong>Why do you want to join us: </strong> $want_to_join</p>
		<p><strong>Class: </strong> $class</p>
	    ";
		wp_mail($to, $subject, $body, $headers);
		wp_redirect(home_url('/recruitment'));
	}
}
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
		<div class="requirement">
			<h2 class="requirement__title">Recruitment</h2>
			<form class="requirement__form" action="" method="POST">
				<span class="requirement__label" style="margin-top:15px;">Character Name <span
						class="required">(required)
					</span>
				</span>
				<input type="text" name="character_name">
				<span class="requirement__label">Email<span class="required">(required)</span></span>
				<input type="email" name="email" required>
				<span class="requirement__label">Class<span class="required">(required)</span></span>
				<select class="select-class select" name="class">
					<option value="druid" selected>Druid</option>
					<option value="hunter">Hunter</option>
					<option value="priest">Priest</option>
					<option value="death-knight">Death knight</option>
					<option value="warlock">Warlock</option>
					<option value="warrior">Warrior</option>
					<option value="shaman">Shaman</option>
					<option value="mage">Mage</option>
				</select>
				<span class="requirement__label">Why do you want to join?<span
						class="required">(required)</span></span>
				<textarea class="want-to-join" name="want_to_join" required></textarea>
				<div class="agree-checkbox">
					<input type="checkbox" name="agree" required>
					<span>I AGREE TO ALL GUILD RULES</span>
				</div>
				<button class="submit-button" type="submit">Submit</button>
			</form>
			<div class="recruitment__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment-image.webp" alt=""></div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>