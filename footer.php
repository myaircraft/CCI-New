<?php
$phone = cc_content('company.phone');
$phone_href = cc_content('company.phone_href');
$email = cc_content('company.email');
?>
<footer>
  <section class="final-cta photo-band section-space" aria-labelledby="footer-cta-title">
    <img class="band-photo" src="<?php echo esc_url(cc_img(cc_content('footer.cta_image'))); ?>" alt="<?php echo esc_attr(cc_content('footer.cta_image_alt')); ?>" width="1920" height="1024" loading="lazy">
    <div class="site-container final-layout band-content">
      <h2 id="footer-cta-title"><?php echo cc_html(cc_content('footer.cta_title')); ?></h2>
      <p><?php cc_e('footer.cta_text'); ?></p>
      <div class="final-actions"><a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn('default', 'lg'); ?>"><?php cc_e('footer.cta_primary_label'); ?></a><a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn('default', 'lg'); ?>"><?php cc_e('footer.cta_secondary_label'); ?></a></div>
      <div class="contact-details"><div><a href="<?php echo esc_attr($phone_href); ?>"><?php echo esc_html($phone); ?></a><p><?php echo esc_html(cc_content('company.hours_days') . ' · ' . cc_content('company.hours_time')); ?></p></div><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></div>
    </div>
  </section>
  <div class="site-footer"><div class="site-container">
    <div class="footer-top"><a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(cc_content('company.name') . ' home'); ?>"><img class="brand-logo" src="<?php echo esc_url(cc_img(cc_content('assets.logo'))); ?>" alt="<?php echo esc_attr(cc_content('company.name')); ?>" width="1920" height="240" loading="lazy"></a><p class="footer-tagline"><?php cc_e('company.tagline'); ?></p></div>
    <div class="footer-grid">
      <?php
      // Columns mirror the header menu: grouped menus keep their sub-headings; direct-link items share one column.
      $landing = ['products-supplies' => 'link:products', 'services' => 'link:services', 'about' => '/about-us/'];
      $footer_cols = [];
      $direct = [];
      foreach (cc_navigation() as $nav_item) {
          if (!empty($nav_item['link']) && empty($nav_item['items'])) { $direct[] = $nav_item; continue; }
          if ($direct) { $footer_cols[] = ['direct' => $direct]; $direct = []; }
          $footer_cols[] = ['item' => $nav_item];
      }
      if ($direct) $footer_cols[] = ['direct' => $direct];
      foreach ($footer_cols as $col) : ?>
        <div>
        <?php if (isset($col['direct'])) : foreach ($col['direct'] as $d) : ?>
          <h3><a href="<?php echo esc_url(cc_link($d['link'])); ?>"><?php echo esc_html($d['label']); ?></a></h3>
        <?php endforeach; else : $ni = $col['item']; ?>
          <h3><?php if (isset($landing[$ni['id'] ?? ''])) : ?><a href="<?php echo esc_url(cc_link($landing[$ni['id']])); ?>"><?php echo esc_html($ni['label']); ?></a><?php else : echo esc_html($ni['label']); endif; ?></h3>
          <?php if (!empty($ni['groups'])) : foreach ($ni['groups'] as $g) : ?>
            <p class="footer-sub"><?php echo esc_html($g['title']); ?></p>
            <?php foreach ($g['items'] as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'])); ?>"><?php echo esc_html($link['label']); ?></a><?php endforeach; ?>
          <?php endforeach; else : foreach ($ni['items'] as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'])); ?>"><?php echo esc_html($link['label']); ?></a><?php endforeach; endif; ?>
        <?php endif; ?>
        </div>
      <?php endforeach; ?>
      <div class="footer-location"><h3><?php cc_e('footer.location_title'); ?></h3><p><?php cc_e('company.address_line1'); ?><br><?php cc_e('company.address_line2'); ?></p><p><?php cc_e('company.hours_days'); ?><br><?php cc_e('company.hours_time'); ?></p></div>
      <div class="footer-contact">
        <a href="<?php echo esc_attr($phone_href); ?>" class="<?php echo cc_btn('shop', 'default', 'footer-phone'); ?>"><?php echo cc_icon('phone'); ?><?php echo esc_html($phone); ?></a>
        <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn('default', 'default', 'footer-contact-button'); ?>"><?php cc_e('footer.contact_label'); ?><?php echo cc_icon('arrow-right'); ?></a>
        <a class="footer-email" href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
        <nav class="footer-socials" aria-label="Social media"><?php foreach (cc_social_links() as $social) : ?><a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($social['name']); ?>" title="<?php echo esc_attr($social['name']); ?>" class="<?php echo cc_btn('ghost', 'icon'); ?>"><?php echo cc_icon($social['icon']); ?></a><?php endforeach; ?></nav>
      </div>
    </div>
    <div class="footer-bottom"><p><?php echo esc_html(str_replace('{year}', date('Y'), cc_content('footer.copyright'))); ?></p><a href="<?php echo esc_url(cc_url('privacy')); ?>"><?php cc_e('footer.privacy_label'); ?></a><p><?php cc_e('footer.bottom_text'); ?></p></div>
  </div></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
