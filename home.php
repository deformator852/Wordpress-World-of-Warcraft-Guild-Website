<?php
// Template Name: Home
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
    <div class="posts">
      <?php
      global $post;
      $posts = array_reverse(get_posts(['numberposts' => -1, 'category' => 4]));
      if ($posts) {
        foreach ($posts as $post) {
          setup_postdata($post);
      ?>
          <div class="post">
            <div class="post-link">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="underline"></div>
            <div class="post-date">
              <p><img src="<?php bloginfo("template_url") ?>/assets/images/date.png" alt="date" /> <?php echo get_the_date("F,j,Y"); ?></p>
            </div>
            <div class="underline"></div>
            <div class="post-content">
              <?php the_post_thumbnail([783, 483]); ?>
              <div class="post-text">
                <?php
                echo wp_trim_words(get_the_content(), 80, '...');
                ?>
              </div>
              <div class="read-more">
                <a href="<?php the_permalink(); ?>">Read more</a>
              </div>
              <div class="underline" style="margin-top:55px;"></div>
            </div>
          </div>
      <?php
        }
      }
      wp_reset_postdata();
      ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>