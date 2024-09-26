<aside class="sidebar">
	<div class="guild-recruitment">
		<h3 class="guild-recruitment__title title">Guild recruitment</h3>
		<div class="side-bar__underline-bold"></div>
		<p class="guild-recruitment__text">We are currently looking for healers, but will accept others. This is a
			custom message that you can set inside your widget options with the theme.</p>
		<?php
		global $post;
		$posts = array_reverse(get_posts(['numberposts' => -1, 'category' => 2]));
		if ($posts) {
			foreach ($posts as $post) {
				setup_postdata($post);
		?>
				<div class="wow-class">
					<div class="role-and-class">
						<?php the_post_thumbnail([38, 38], ["class" => "class-image"]); ?>
						<div>
							<p class="class"><?php the_title(); ?></p>
							<?php
							$content = get_the_content();
							$data = trim(explode('|', $content)[1]);
							if ($data) {
								echo "<p class='role'>$data</p>";
							}
							?>
						</div>
					</div>
					<div class="necessity">
						<?php
						$content = get_the_content();
						$data = explode('|', $content)[0];
						$data = trim(strip_tags($data));
						$class_lower = strtolower($data);
						$data = ucwords($class_lower);
						echo "<p class='$class_lower'>$data</p>";
						?>
					</div>
				</div>
				<div class="side-bar__underline-thin"></div>
		<?php
			}
		}
		wp_reset_postdata()
		?>
	</div>
	<div class="woltk-progress">
		<h3 class="woltk-progress__title title">
			WoTLK & Classic
		</h3>
		<div class="side-bar__underline-bold"></div>
		<div class="woltk-progress-image">
			<img src="<?php bloginfo("template_url") ?>/assets/images/woltk.png" alt="">
		</div>
		<div class="progress-bar">
			<ul class="expansion">
				<?php
				$posts = array_reverse(get_posts(['numberposts' => -1, 'category' => 3]));
				if ($posts) {
					foreach ($posts as $post) {
						setup_postdata($post);
						$data = trim(get_the_content());
						$content = explode("|", $data);
						$boss_count = $content[1];
						$killed_boss = explode("/", $boss_count)[0];
						unset($content[1]);
						$boss_list = explode(",", $content[0]);
				?>
						<li style="background-image:url('<?php the_post_thumbnail_url([351, 59]); ?>')" class="raid">
							<div onclick="clickRaid(this)" class="raid-info">
								<p class="raid-name"><?php the_title(); ?></p>
								<p class="boss-count"><?php echo $boss_count; ?></p>
							</div>
							<ul class="boss-list">
								<?php
								foreach ($boss_list as $key => $boss) {
								?>
									<li class="<?php echo $key < $killed_boss ? "killed" : null  ?> boss-list__item"><?php echo strip_tags($boss); ?></li>
								<?php } ?>
							</ul>
						</li>
				<?php }
				}
				wp_reset_postdata();
				?>
			</ul>
		</div>

	</div>
	<div class="recent-posts">
		<h3 class="recent-posts__title title">Recent Posts</h3>
		<div class="side-bar__underline-bold"></div>
		<ul>
			<?php
			$posts = array_reverse(get_posts(['numberposts' => 3, 'category' => 4]));
			if ($posts) {
				foreach ($posts as $post) { ?>
					<li class="recent-posts__item">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
					<div class="side-bar__underline-thin"></div>
			<?php wp_reset_postdata();
				}
			} ?>
		</ul>
	</div>
</aside>