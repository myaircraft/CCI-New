<?php get_header(); ?>
<main class="section-space">
  <div class="site-container" style="text-align:center;max-width:640px;">
    <p class="section-topic"><?php cc_e('page404.code'); ?></p>
    <h1 class="section-heading"><?php cc_e('page404.title'); ?></h1>
    <p class="section-description"><?php cc_e('page404.text'); ?></p>
    <div class="section-actions">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_e('page404.button_label'); ?></a>
      <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn('outline'); ?>">CONTACT US</a>
    </div>
  </div>
</main>
<?php get_footer();
