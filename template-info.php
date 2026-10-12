<?php
/**
 * Template Name: Info Page
 *
 * General content pages (about, industries, contracts, contact, indexes). All content comes from the
 * page's "Page content" box: a banner, a breadcrumb and a list of blocks, each with its own layout.
 * Layouts: text, cards, rows, people, points, contact, split, statement, logos, coops.
 */
get_header();
$title = cc_page('banner.title') ?: get_the_title();
?>
<main class="category-page info-page">

  <section class="category-banner<?php echo cc_page_has('banner.zoom') ? ' is-zoom' : ''; ?><?php echo cc_page('banner.zoom') === 'fit' ? ' is-fit' : ''; ?><?php echo cc_page_has('banner.plain') ? ' is-plain' : ''; ?>"<?php echo cc_page('banner.zoom') === 'tight' ? ' style="--zs:1.2;--ze:1.38"' : (cc_page('banner.zoom') === 'fit' ? ' style="--zs:1;--ze:1.32"' : ''); ?> aria-labelledby="category-title">
    <?php if (cc_page_has('banner.video')) : ?><video class="category-banner-photo" src="<?php echo esc_url(cc_img(cc_page('banner.video'))); ?>" autoplay muted loop playsinline preload="auto" aria-hidden="true"></video>
    <?php elseif (cc_page_has('banner.image')) : ?><img class="category-banner-photo" src="<?php echo esc_url(cc_img(cc_page('banner.image'))); ?>" alt="" aria-hidden="true" width="1152" height="576" fetchpriority="high"<?php echo cc_page_has('banner.position') ? ' style="object-position:' . esc_attr(cc_page('banner.position')) . '"' : ''; ?>><?php endif; ?>
    <div class="site-container category-banner-content">
      <?php if (cc_page_has('banner.kicker')) : ?><p class="category-kicker"><?php cc_page_e('banner.kicker'); ?></p><?php endif; ?>
      <h1 id="category-title"><?php echo esc_html($title); ?></h1>
      <?php if (cc_page_has('banner.tagline')) : ?><p class="category-tagline<?php echo cc_page_has('banner.tagline_speed') ? ' is-sentence' : ''; ?>" data-typewriter<?php echo cc_page_has('banner.tagline_speed') ? ' data-speed="' . (int) cc_page('banner.tagline_speed') . '"' : ''; ?>><?php echo nl2br(esc_html(cc_page('banner.tagline'))); ?></p><?php endif; ?>
      <?php if (cc_page_has('banner.lead')) : ?><p class="category-lead<?php echo cc_page_has('banner.type_lead') ? ' is-boxed' : ''; ?>"<?php echo cc_page_has('banner.type_lead') ? ' data-typewriter data-speed="' . (int) cc_page('banner.type_lead') . '"' : ''; ?>><?php cc_page_e('banner.lead'); ?></p><?php endif; ?>
      <?php if (cc_page_has('banner.shop_url')) : ?><div class="category-actions"><a href="<?php echo esc_url(cc_page('banner.shop_url')); ?>" class="<?php echo cc_btn('shop', 'default', 'cc-shop-btn banner-shop'); ?>" target="_blank" rel="noopener"><?php echo cc_icon('shopping-cart'); ?><?php echo esc_html(cc_page('banner.shop_label') ?: 'SHOP NOW'); ?></a></div><?php endif; ?>
      <?php if (cc_page_has('banner.quote_label')) : ?><div class="category-actions"><a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('banner.quote_label'); ?><?php echo cc_icon('arrow-right'); ?></a><?php if (cc_page_has('banner.call_label')) : ?><a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>" class="<?php echo cc_btn('outline', 'default', 'category-secondary'); ?>"><?php echo esc_html(trim(cc_page('banner.call_label') . ' ' . cc_content('company.phone'))); ?></a><?php endif; ?></div><?php endif; ?>
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
    <section class="category-section info-block info-layout-<?php echo esc_attr($layout); ?><?php echo $layout === 'faq' ? ' category-faq' : ''; ?><?php echo !empty($b['tint']) ? ' is-tinted' : ''; ?><?php echo !empty($b['flush']) ? ' is-flush' : ''; ?>" id="<?php echo esc_attr($bid); ?>" aria-labelledby="<?php echo esc_attr($bid); ?>-title">
      <?php if (!in_array($layout, ['split', 'statement', 'intro', 'centered', 'article', 'video', 'stat'], true) && (($b['title'] ?? '') !== '' || ($b['description'] ?? '') !== '' || $layout === 'text')) : ?>
      <div class="category-section-heading">
        <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html(cc_tc($b['title'])); ?></h2><?php endif; ?>
        <?php if (($b['description'] ?? '') !== '') : ?><p><?php echo esc_html($b['description']); ?></p><?php endif; ?>
        <?php if ($layout === 'text') : foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; endif; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'cards' && $items) : ?>
      <div class="info-cards<?php echo !empty($b['icons']) ? ' is-icons' : ''; ?><?php echo !empty($b['wide']) ? ' is-wide' : ''; ?><?php echo !empty($b['size']) ? ' is-' . esc_attr($b['size']) : ''; ?><?php echo !empty($b['caps']) ? ' is-caps' : ''; ?>"><?php foreach ($items as $it) :
        $link = ($it['link'] ?? '') !== '' ? cc_link($it['link']) : ''; $heading = esc_html($it['title'] ?? ''); ?>
        <article class="info-card<?php echo $link ? ' is-link' : ''; ?><?php echo !empty($it['image']) ? ' has-media' : ''; ?>"<?php echo !empty($it['id']) ? ' id="' . esc_attr($it['id']) . '"' : ''; ?>>
          <?php if (!empty($it['image'])) : ?><img class="info-card-media" src="<?php echo esc_url(cc_img($it['image'])); ?>" alt="" width="540" height="334" loading="lazy" decoding="async"><?php endif; ?>
          <h3><?php echo $link ? '<a href="' . esc_url($link) . '">' . $heading . '</a>' : $heading; ?></h3>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
          <?php if (!empty($it['lines'])) : ?><ul><?php foreach ((array) $it['lines'] as $line) : ?><li><?php echo esc_html($line); ?></li><?php endforeach; ?></ul><?php endif; ?>
          <?php if (!empty($it['url'])) : ?><a class="info-card-button <?php echo cc_btn(); ?>" href="<?php echo esc_url($it['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($it['button_label'] ?? 'SHOP NOW'); ?></a><?php endif; ?>
        </article>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'rows' && $items) : ?>
      <div class="info-rows"><?php foreach ($items as $it) : ?>
        <div class="info-row">
          <h3><?php echo esc_html($it['title'] ?? ''); ?></h3>
          <div>
            <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
            <?php if (!empty($it['lines'])) : ?><ul<?php echo count((array) $it['lines']) > 6 ? ' class="is-columns"' : ''; ?>><?php foreach ((array) $it['lines'] as $line) : ?><li><?php echo esc_html($line); ?></li><?php endforeach; ?></ul><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'people' && $items) : ?>
      <div class="info-people<?php echo count($items) === 2 ? ' is-pair' : ''; ?><?php echo count($items) > 3 ? ' is-team' : ''; ?>"><?php foreach ($items as $it) :
        $name = $it['title'] ?? ''; $initials = strtoupper(implode('', array_map(fn($w) => mb_substr($w, 0, 1), array_slice(preg_split('/\s+/', trim($name)), 0, 2)))); ?>
        <article class="info-person<?php echo !empty($it['image']) ? ' has-photo' : ''; ?>">
          <?php if (!empty($it['image'])) : ?><span class="info-photo"><img src="<?php echo esc_url(cc_img($it['image'])); ?>" alt="<?php echo esc_attr($name); ?>" width="300" height="300" loading="lazy" decoding="async"></span>
          <?php else : ?><span class="info-monogram" aria-hidden="true"><?php echo esc_html($initials); ?></span><?php endif; ?>
          <h3><?php echo esc_html($name); ?></h3>
          <?php if (($it['meta'] ?? '') !== '') : ?><p class="info-role"><?php echo esc_html($it['meta']); ?></p><?php endif; ?>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
        </article>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'points' && !empty($b['points'])) : ?>
      <ul class="trust-points"><?php foreach ((array) $b['points'] as $point) : ?><li><?php echo cc_icon('check'); ?><?php echo esc_html($point); ?></li><?php endforeach; ?></ul>
      <?php endif; ?>

      <?php if ($layout === 'article') : ?>
      <div class="info-article">
        <?php if (($b['kicker'] ?? '') !== '') : ?><p class="info-kicker"><?php echo esc_html($b['kicker']); ?></p><?php endif; ?>
        <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html(cc_tc($b['title'])); ?></h2><?php endif; ?>
        <?php foreach ($paragraphs as $n => $p) : $text = preg_replace(['/\{\{(.+?)\}\}/', '/\*\*(.+?)\*\*/'], ['<span class="hl">$1</span>', '<strong>$1</strong>'], esc_html($p)); ?><p<?php echo $n === 0 ? ' class="is-lead"' : ''; ?>><?php echo $text; ?></p><?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'video' && !empty($b['video'])) : ?>
      <figure class="info-video"><video src="<?php echo esc_url(cc_img($b['video'])); ?>" muted loop playsinline controls preload="metadata" data-lazy-play aria-label="<?php echo esc_attr($b['video_label'] ?? 'Competitive Choice film'); ?>"></video></figure>
      <?php endif; ?>

      <?php if ($layout === 'steps' && $items) : ?>
      <ol class="info-steps"><?php foreach ($items as $it) : ?>
        <li><?php if (!empty($it['image'])) : ?><img src="<?php echo esc_url(cc_img($it['image'])); ?>" alt="" width="167" height="167" loading="lazy" decoding="async"><?php endif; ?>
          <h3><?php echo esc_html($it['title'] ?? ''); ?></h3>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?></li>
      <?php endforeach; ?></ol>
      <?php endif; ?>

      <?php if ($layout === 'stat') : ?>
      <div class="info-stat">
        <?php if (($b['kicker'] ?? '') !== '') : ?><p class="info-kicker"><?php echo esc_html($b['kicker']); ?></p><?php endif; ?>
        <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html(cc_tc($b['title'])); ?></h2><?php endif; ?>
        <?php foreach ($paragraphs as $p) : ?><p class="info-stat-text"><?php echo esc_html($p); ?></p><?php endforeach; ?>
        <p class="info-stat-figure"><strong><?php echo esc_html($b['number'] ?? ''); ?></strong><span><?php echo esc_html($b['number_label'] ?? ''); ?></span></p>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'trust') : ?>
      <div class="info-trust-copy"><?php foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?></div>
      <?php if (!empty($b['stats'])) : ?><div class="trust-stats"><?php foreach ((array) $b['stats'] as $stat) : ?><div><strong><?php echo esc_html($stat[0] ?? ''); ?></strong><span><?php echo esc_html($stat[1] ?? ''); ?></span></div><?php endforeach; ?></div><?php endif; ?>
      <?php if (!empty($b['image'])) : ?><figure class="info-trust-photo"><img src="<?php echo esc_url(cc_img($b['image'])); ?>" alt="<?php echo esc_attr($b['image_alt'] ?? ''); ?>" width="2000" height="757" loading="lazy" decoding="async"></figure><?php endif; ?>
      <?php if (!empty($b['points'])) : ?><ul class="trust-points"><?php foreach ((array) $b['points'] as $point) : ?><li><?php echo cc_icon('check'); ?><?php echo esc_html($point); ?></li><?php endforeach; ?></ul><?php endif; ?>
      <?php endif; ?>

      <?php if ($layout === 'faq' && $items) : ?>
      <div class="category-faq-list" data-orientation="vertical" data-accordion>
        <?php foreach ($items as $fi => $faq) : ?>
          <div data-state="closed" data-orientation="vertical" class="border-b">
            <h3 data-orientation="vertical" data-state="closed" class="flex"><button type="button" aria-expanded="false" data-state="closed" data-orientation="vertical" id="<?php echo esc_attr($bid); ?>-trigger-<?php echo $fi; ?>" aria-controls="<?php echo esc_attr($bid); ?>-panel-<?php echo $fi; ?>" class="flex flex-1 items-center justify-between py-4 text-sm font-medium cursor-pointer transition-all hover:underline text-left [&amp;[data-state=open]&gt;svg]:rotate-180 category-faq-trigger"><span class="category-faq-question"><span class="category-faq-number"><?php echo $fi + 1; ?>.</span><span><?php echo esc_html($faq['question'] ?? ''); ?></span></span><?php echo cc_icon('chevron-down', 'h-4 w-4 shrink-0 text-muted-foreground transition-transform duration-200'); ?></button></h3>
            <div data-state="closed" id="<?php echo esc_attr($bid); ?>-panel-<?php echo $fi; ?>" hidden role="region" aria-labelledby="<?php echo esc_attr($bid); ?>-trigger-<?php echo $fi; ?>" data-orientation="vertical" class="overflow-hidden text-sm data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"><div class="pb-4 pt-0 category-faq-answer"><p><?php echo esc_html($faq['answer'] ?? ''); ?></p></div></div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'intro') : ?>
      <div class="info-intro"><?php foreach ($paragraphs as $p) : ?><p><?php echo preg_replace('/\{\{(.+?)\}\}/', '<span class="hl-draw">$1</span>', esc_html($p)); ?></p><?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'centered') : ?>
      <div class="info-centered">
        <?php if (($b['kicker'] ?? '') !== '') : ?><p class="info-kicker"><?php echo esc_html($b['kicker']); ?></p><?php endif; ?>
        <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo !empty($b['raw_title']) ? nl2br(esc_html($b['title'])) : esc_html(cc_tc($b['title'])); ?></h2><?php endif; ?>
        <?php foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'split') : ?>
      <div class="info-split<?php echo !empty($b['reverse']) ? ' is-reverse' : ''; ?><?php echo !empty($b['person']) ? ' is-person' : ''; ?>">
        <div class="info-split-text">
          <?php if (($b['kicker'] ?? '') !== '') : ?><p class="info-kicker"><?php echo esc_html($b['kicker']); ?></p><?php endif; ?>
          <?php if (($b['title'] ?? '') !== '') : ?><h2 id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html(cc_tc($b['title'])); ?></h2><?php endif; ?>
          <?php foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?>
          <?php if (!empty($b['lines'])) : ?><ul class="info-split-points"><?php foreach ((array) $b['lines'] as $line) : ?><li><?php echo cc_icon('check'); ?><?php echo esc_html($line); ?></li><?php endforeach; ?></ul><?php endif; ?>
        </div>
        <?php if (!empty($b['gif'])) : ?><figure class="info-split-media is-demo"><button type="button" class="demo-play" data-gif="<?php echo esc_url(cc_img($b['gif'])); ?>" aria-label="Play the demonstration"><img src="<?php echo esc_url(cc_img($b['image'])); ?>" alt="<?php echo esc_attr($b['image_alt'] ?? ''); ?>" width="400" height="225" loading="lazy" decoding="async"><span class="demo-play-label"><?php echo cc_icon('arrow-right'); ?>PLAY DEMO</span></button></figure>
        <?php elseif (!empty($b['image'])) : ?><figure class="info-split-media"><img src="<?php echo esc_url(cc_img($b['image'])); ?>" alt="<?php echo esc_attr($b['image_alt'] ?? ''); ?>" width="1000" height="618" loading="lazy" decoding="async"></figure><?php endif; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'statement') : ?>
      <div class="info-statement">
        <?php if (($b['kicker'] ?? '') !== '') : ?><p class="info-kicker" id="<?php echo esc_attr($bid); ?>-title"><?php echo esc_html($b['kicker']); ?></p><?php endif; ?>
        <?php foreach ($paragraphs as $p) : ?><p class="info-statement-text"><?php echo esc_html($p); ?></p><?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ($layout === 'logos' && $items) : ?>
      <ul class="info-logos"><?php foreach ($items as $it) : ?>
        <li class="info-logo"><span class="info-logo-frame"><img src="<?php echo esc_url(cc_img($it['image'] ?? '')); ?>" alt="<?php echo esc_attr($it['title'] ?? ''); ?>" width="250" height="150" loading="lazy" decoding="async"></span>
          <span class="info-logo-name"><?php echo esc_html($it['title'] ?? ''); ?></span>
          <?php if (($it['meta'] ?? '') !== '') : ?><span class="info-logo-meta"><?php echo esc_html($it['meta']); ?></span><?php endif; ?></li>
      <?php endforeach; ?></ul>
      <?php endif; ?>

      <?php if ($layout === 'coops' && $items) : ?>
      <div class="info-coops"><?php foreach ($items as $it) : ?>
        <article class="info-coop">
          <span class="info-logo-frame"><img src="<?php echo esc_url(cc_img($it['image'] ?? '')); ?>" alt="" width="250" height="150" loading="lazy" decoding="async"></span>
          <h3><?php echo esc_html($it['title'] ?? ''); ?></h3>
          <?php if (($it['description'] ?? '') !== '') : ?><p><?php echo esc_html($it['description']); ?></p><?php endif; ?>
          <?php if (!empty($it['lines'])) : ?><details><summary>Contract numbers (<?php echo count((array) $it['lines']); ?>)</summary><ul><?php foreach ((array) $it['lines'] as $line) : ?><li><?php echo esc_html($line); ?></li><?php endforeach; ?></ul></details><?php endif; ?>
          <?php if (!empty($it['link'])) : ?><a class="info-coop-link" href="<?php echo esc_url($it['link']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($it['link_label'] ?? 'LEARN MORE'); ?><?php echo cc_icon('arrow-up-right'); ?></a><?php endif; ?>
        </article>
      <?php endforeach; ?></div>
      <?php endif; ?>

      <?php if ($layout === 'contact') :
        $maps_q = rawurlencode(cc_content('company.address_line1') . ', ' . cc_content('company.address_line2'));
      ?>
      <div class="contact-layout">
        <div class="contact-details">
          <ul class="contact-tiles">
            <li><span class="contact-icon"><?php echo cc_icon('map-pin'); ?></span><div><h3>Visit us</h3><p><a href="https://www.google.com/maps/search/?api=1&amp;query=<?php echo $maps_q; ?>" target="_blank" rel="noopener"><?php echo esc_html(cc_content('company.legal_name')); ?><br><?php cc_e('company.address_line1'); ?><br><?php cc_e('company.address_line2'); ?></a></p></div></li>
            <li><span class="contact-icon"><?php echo cc_icon('phone'); ?></span><div><h3>Call us</h3><p><a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>"><?php cc_e('company.phone'); ?></a></p></div></li>
            <li><span class="contact-icon"><?php echo cc_icon('mail'); ?></span><div><h3>Email us</h3><p><a href="mailto:<?php echo esc_attr(cc_content('company.email')); ?>"><?php cc_e('company.email'); ?></a></p></div></li>
            <li><span class="contact-icon"><?php echo cc_icon('clock'); ?></span><div><h3>Business hours</h3><p><?php echo esc_html(cc_content('company.hours_days')); ?><br><?php echo esc_html(cc_content('company.hours_time')); ?> Central</p></div></li>
          </ul>
        </div>
        <form class="contact-form contact-form-card" id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
          <h3>Send us your requirement</h3>
          <p class="contact-form-note">Tell us what you need and our team will get back to you.</p>
          <?php if (isset($_GET['sent'])) : ?><p class="form-notice is-success" role="status">Thank you. Your message has been sent and our team will be in touch.</p><?php endif; ?>
          <?php if (isset($_GET['error'])) : ?><p class="form-notice is-error" role="alert">Your message could not be sent. Please check the highlighted details and try again, or call us.</p><?php endif; ?>
          <input type="hidden" name="action" value="cc_contact">
          <?php wp_nonce_field('cc_contact', 'cc_contact_nonce'); ?>
          <div class="form-trap" aria-hidden="true"><label>Website<input type="text" name="cc_website" tabindex="-1" autocomplete="off"></label></div>
          <div class="form-grid">
            <label><span class="sr-only">Name</span><input type="text" name="cc_name" required autocomplete="name" placeholder="Name"></label>
            <label><span class="sr-only">Email</span><input type="email" name="cc_email" required autocomplete="email" placeholder="Email"></label>
            <label><span class="sr-only">Phone number</span><input type="tel" name="cc_phone" autocomplete="tel" placeholder="Phone number"></label>
            <label><span class="sr-only">Company or organization</span><input type="text" name="cc_company" autocomplete="organization" placeholder="Company or organization"></label>
          </div>
          <label><span class="sr-only">How can we help?</span><textarea name="cc_message" rows="5" required placeholder="How can we help? Tell us what you are looking for, such as products or services, quantities, delivery location and timing."></textarea></label>
          <button type="submit" class="<?php echo cc_btn('shop', 'default', 'contact-submit'); ?>">REQUEST A CALL BACK<?php echo cc_icon('arrow-right'); ?></button>
        </form>
      </div>
      <?php if (!empty($b['map'])) : ?><div class="contact-map"><iframe title="Map to Competitive Choice, <?php echo esc_attr(cc_content('company.address_line1')); ?>" src="https://www.google.com/maps?q=<?php echo $maps_q; ?>&amp;output=embed" width="1060" height="380" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div><?php endif; ?>
      <?php endif; ?>

      <?php if (!in_array($layout, ['text', 'split', 'statement', 'intro', 'centered', 'article', 'video', 'stat'], true) && $paragraphs) : ?><div class="info-after"><?php foreach ($paragraphs as $p) : ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?></div><?php endif; ?>
    </section>
    <?php endforeach; ?>

    <?php if (cc_page_has('related.links')) : ?>
    <section class="category-section category-related" aria-labelledby="related-title">
      <h2 id="related-title"><?php echo esc_html(cc_tc(cc_page('related.title') ?: 'Related pages')); ?></h2>
      <div class="category-related-links"><?php foreach (cc_page_list('related.links') as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'] ?? '')); ?>"><?php echo esc_html($link['label'] ?? ''); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div>
    </section>
    <?php endif; ?>
  </div>
</main>
<?php get_footer();
