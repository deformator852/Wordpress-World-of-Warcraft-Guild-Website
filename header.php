<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
	<title>World of Warcraft</title>
	<style>
		body {
			background-image: url("<?php echo get_template_directory_uri(); ?>/assets/images/background.jpg");
			background-repeat: no-repeat;
			background-position: center top;
			background-size: contain;
			background-color: #000;
			background-attachment: fixed;
			display: flex;
			justify-content: center;
			color: #fff;
			font-family: "Rubik", sans-serif;
			line-height: 1.5;
			font-size: 13px;
			font-weight: 400;
		}

		@media(min-width:320px) and (max-width:480px) {
			body {
				background-image: none;
			}
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<header class="header">
			<ul class="header-bar">
				<li class="logo">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo("template_url") ?>/assets/images/logo.png" alt="World of Warcraft logo" /></a>
				</li>
				<li class="socials">
					<a href="twitch">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/twitch.png" alt="Twitch" />
					</a>
					<a href="facebook">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/facebook.png" alt="Facebook" />
					</a>
					<a href="discord">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/discord.png" alt="Discord" />
					</a>
					<a href="battle.net">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/bnet.png" alt="Battle.net" />
					</a>
					<a href="RSS">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/rss.png" alt="RSS" />
					</a>
					<a href="email">
						<img src="<?php bloginfo("template_url") ?>/assets/images/socials/email.png" alt="Email" />
					</a>
				</li>
			</ul>
		</header>