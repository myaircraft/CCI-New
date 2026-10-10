<?php
/**
 * Template Name: Info Page
 *
 * General content pages (about, industries, contracts, contact, indexes). All content comes from the
 * page's "Page content" box: a banner, a breadcrumb and a list of blocks, each with its own layout.
 * Layouts: text, cards, rows, people, points, contact.
 */
get_header();
$title = cc_page('banner.title') ?: get_the_title();
?>
<main class="category-page info-page">

  <section class="category-banner" aria-labelledby="category-title">
    <?php if (cc_page_has('banner.image')) : ?><img class="category-banner-photo" src="<?php echo esc_url(cc_img(cc_page('banner.image'))); ?>" alt="" aria-hidden="true" width="1152" height="576" fetchpriority="high"><?php endif; ?>
    <div class="site-container category-banner-content">
      <?php if (cc_page_has('banner.kicker')) : ?><p class="category-kicker"><?php cc_page_e('banner.kicker'); ?></p><?php endif; ?>
      <h1 id="category-title"><?php echo esc_html($title); ?></h1>
      <?php if (cc_page_has('banner.lead')) : ?><p class="category-lead"><?php cc_page_e('banner.lead'); ?></p><?php endif; ?>
      <?php if (cc_page_has('banner.quote_label')) : ?><div class="category-actions"><a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('banner.quote_label'); ?><?php echo cc_icon('arrow-right'); ?></a></div><?php endif; ?>
    </div>
  </section>
  <div class="site-container"><nav class="breadcrumbs" aria-label="Breadcrumb"><ol>
    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(cc_page('breadcrumb.home') ?: 'Home'); ?></a><?php echo cc_icon('chevron-right'); ?></li>
    <?php if (cc_page_has('breadcrumb.parent')) : ?><li><a href="<?php echo esc_url(cc_link(cc_page('breadcrumb.parent_link'))); ?>"><?php cc_page_e('breadcrumb.parent'); ?></a><?php echo cc_icon('chevron-right'); ?></li><?php endif; ?>
    <li aria-current="page"><?php echo esc_html(cc_page('breadcrumb.current') ?: get_the_title()); ?></li>
  </ol></nav></div>

  <div class="site-container">
    <?php foreach (cc_page_list('blocks') as $i => $b) :
      $layout = $b['layout'] ?? 'text';
      $bid = ($b['id'] ?? '') !== '' ? $b['id'] : 'section-' . $i;
      $items = (array) ($b['items'] ?? []);
      $paragraphs = (array) ($b['paragraphs'] ?? []);
    ?>
    <section class="category-section info-block info-<?php echo esc_attr($layout); ?>" id="<?php echo esc_attr($bid); ?>" aria-labelledby="<?php echo esc_attr($bid); ?>-title">
      <?php if (($b['title'] ?? '') !== '' || ($b['description'] ?? '') !== '' || $layout === 'text') : ?>
      <div class="category-section-heading">
        <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html($b['title']); ?></h2><?php endif; ?>
        <?php if (($b['description'] ?? '') !== '') : ?><p><?php echo esc_html($b['description']); ?></p><?php endif; ?>
        <?php if ($layout === 'text') : foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; endif; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'cards' && $items) : ?>
      <div class="info-cards"><?php foreach ($items as $it) :
        $link = ($it['link'] ?? '') !== '' ? cc_link($it['link']) : ''; $heading = esc_html($it['title'] ?? ''); ?>
        <article class="info-card<?php echo $link ? ' is-link' : ''; ?>"<?php echo !empty($it['id']) ? ' id="' . esc_attr($it['id']) . '"' : ''; ?>>
          <h3><?php echo $link ? '<a href="' . esc_url($link) . '">' . $heading . '</a>' : $heading; ?></h3>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
          <?php if (!empty($it['lines'])) : ?><ul><?php foreach ((array) $it['lines'] as $line) : ?><li><?php echo esc_html($line); ?></li><?php endforeach; ?></ul><?php endif; ?>
        </article>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'rows' && $items) : ?>
      <div class="info-rows"><?php foreach ($items as $it) : ?>
        <div class="info-row">
          <h3><?php echo esc_html($it['title'] ?? ''); ?></h3>
          <div>
            <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
            <?php if (!empty($it['lines'])) : ?><ul><?php foreach ((array) $it['lines'] as $line) : ?><li><?php echo esc_html($line); ?></li><?php endforeach; ?></ul><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'people' && $items) : ?>
      <div class="info-people"><?php foreach ($items as $it) :
        $name = $it['title'] ?? ''; $initials = strtoupper(implode('', array_map(fn($w) => mb_substr($w, 0, 1), array_slice(preg_split('/\s+/', trim($name)), 0, 2)))); ?>
        <article class="info-person">
          <span class="info-monogram" aria-hidden="true"><?php echo esc_html($initials); ?></span>
          <h3><?php echo esc_html($name); ?></h3>
          <?php if (($it['meta'] ?? '') !== '') : ?><p class="info-role"><?php echo esc_html($it['meta']); ?></p><?php endif; ?>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
        </article>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'points' && !empty($b['points'])) : ?>
      <ul class="trust-points"><?php foreach ((array) $b['points'] as $point) : ?><li><?php echo cc_icon('check'); ?><?php echo esc_html($point); ?></li><?php endforeach; ?></ul>
      <?php endif; ?>

      <?php if ($layout === 'contact') : ?>
      <div class="contact-layout">
        <div class="contact-card">
          <h3><?php echo esc_html(cc_content('company.legal_name')); ?></h3>
          <p><?php cc_e('company.address_line1'); ?><br><?php cc_e('company.address_line2'); ?></p>
          <p><a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>"><?php cc_e('company.phone'); ?></a><br><a href="mailto:<?php echo esc_attr(cc_content('company.email')); ?>"><?php cc_e('company.email'); ?></a></p>
          <p><?php echo esc_html(cc_content('company.hours_days') . ', ' . cc_content('company.hours_time')); ?></p>
        </div>
        <form class="contact-form" id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
          <?php if (isset($_GET['sent'])) : ?><p class="form-notice is-success" role="status">Thank you. Your message has been sent and our team will be in touch.</p><?php endif; ?>
          <?php if (isset($_GET['error'])) : ?><p class="form-notice is-error" role="alert">Your message could not be sent. Please check the highlighted details and try again, or call us.</p><?php endif; ?>
          <input type="hidden" name="action" value="cc_contact">
          <?php wp_nonce_field('cc_contact', 'cc_contact_nonce'); ?>
          <div class="form-trap" aria-hidden="true"><label>Website<input type="text" name="cc_website" tabindex="-1" autocomplete="off"></label></div>
          <div class="form-grid">
            <label>Name<input type="text" name="cc_name" required autocomplete="name"></label>
            <label>Email<input type="email" name="cc_email" required autocomplete="email"></label>
            <label>Phone<input type="tel" name="cc_phone" autocomplete="tel"></label>
            <label>Company or organization<input type="text" name="cc_company" autocomplete="organization"></label>
          </div>
          <label>What do you need?<textarea name="cc_message" rows="6" required></textarea></label>
          <button type="submit" class="<?php echo cc_btn(); ?>">SEND MESSAGE<?php echo cc_icon('arrow-right'); ?></button>
        </form>
      </div>
      <?php endif; ?>

      <?php if (!in_array($layout, ['text'], true) && $paragraphs) : ?><div class="info-after"><?php foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?></div><?php endif; ?>
    </section>
    <?php endforeach; ?>

    <?php if (cc_page_has('related.links')) : ?>
    <section class="category-section category-related" aria-labelledby="related-title">
      <h2 id="related-title"><?php echo esc_html(cc_page('related.title') ?: 'Related pages'); ?></h2>
      <div class="category-related-links"><?php foreach (cc_page_list('related.links') as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'] ?? '')); ?>"><?php echo esc_html($link['label'] ?? ''); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div>
    </section>
    <?php endif; ?>
  </div>
</main>
<?php get_footer();
