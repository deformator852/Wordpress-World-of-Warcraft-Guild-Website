<?php
// Template Name: Contact
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = sanitize_text_field($_POST["name"]);
  $email = sanitize_email($_POST["email"]);
  $issue = sanitize_text_field($_POST["issue"]);
  $message = sanitize_textarea_field($_POST["message"]);
  echo "<h1>Work</h1>";
  if (!(empty($character_name)) && !(empty($email)) && !(empty($class))) {
    $to = get_option("admin_email");
    $subject = "Contact message";
    $headers = ['Content-Type: text/html; charset=UTF-8'];
    $body = "
		<p><strong>Name: </strong> $name</p>
		<p><strong>Email: </strong> $email</p>
    <p><strong>Issue: </strong> $issue</p>
    <p><strong>Message: </strong> $message</p>
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
  <div class="content contact-content">
    <h2 class="contact__title">Contact Guild</h2>
    <form class="contact__form" action="./contact.php" method="GET">
      <span class="contact__label">Name<span class="required">(required)</span></span>
      <input type="text" name="name" required>
      <span class="contact__label">Email<span class="required">(required)</span></span>
      <input type="email" name="email" required>
      <span class="contact__label">General Reason for Contact<span class="required">(required)</span></span>
      <select class="select select-issue" name="issue" required>
        <option value="guild-issue">Issue in Guild</option>
        <option value="raid-attendance">Raid Attendance</option>
        <option value="website-issue">Website issue</option>
        <option value="other">Other</option>
      </select>
      <span class="contact__label">Text<span class="required">(required)</span></span>
      <textarea name="message" required></textarea>
      <button type="submit" class="submit-button">Submit</button>
    </form>
    <div class="contact-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-image.webp" alt="">
    </div>
  </div>
</main>
<?php get_footer(); ?>