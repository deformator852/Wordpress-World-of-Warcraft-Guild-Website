<?php
// Template Name: Gallery
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
  <div class="gallery-content content">
    <h1>Gallery</h1>
    <div class="gallery">
      <div class="gallery-img"><img src="<?php the_field("first"); ?>" alt=""> </div>
      <div class="gallery-img"><img src="<?php the_field("second"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("third"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("fourth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("fifth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("sixth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("seventh"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("eighth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("ninth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("tenth"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("eleventh"); ?>" alt=""></div>
      <div class="gallery-img"><img src="<?php the_field("twelfth"); ?>" alt=""></div>
      <div class="gallery-img last-gallery-element"><img src="<?php the_field("thirteenth"); ?>" alt=""></div>
    </div>
  </div>
</main>
</div>
<?php get_footer(); ?>