<?php
/**
 * Template Name: Enzyme Page
 *
 * Designed layout for Enzyme Treatment & Maintainers (client mock-up). Content comes from the page's "Page content" box.
 */
get_header();
$icons = [
    'fork'     => '<path d="M7 3v8M4 3v5a3 3 0 0 0 6 0V3M7 11v10"></path><path d="M17 3c-2 2-3 5-3 8h3v10"></path>',
    'plus'     => '<path d="M9 3h6v6h6v6h-6v6H9v-6H3V9h6z"></path>',
    'building' => '<path d="M5 21V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v17M15 9h4a1 1 0 0 1 1 1v11M3 21h18M9 7h2M9 11h2M9 15h2"></path>',
    'sliders'  => '<path d="M4 6h10M18 6h2M4 12h4M12 12h8M4 18h12M20 18h0"></path><circle cx="16" cy="6" r="2"></circle><circle cx="10" cy="12" r="2"></circle><circle cx="18" cy="18" r="2"></circle>',
    'shield'   => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"></path><path d="m9 12 2 2 4-4"></path>',
    'box'      => '<path d="M21 8 12 3 3 8v8l9 5 9-5z"></path><path d="M3 8l9 5 9-5M12 13v8"></path>',
    'calendar' => '<rect x="4" y="5" width="16" height="16" rx="1"></rect><path d="M4 10h16M9 3v4M15 3v4M9 15l2 2 4-4"></path>',
];
$svg = fn($name) => '<svg class="ez-icon" viewBox="0 0 24 24" width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($icons[$name] ?? $icons['shield']) . '</svg>';
?>
<main class="category-page ez-page">

  <section class="category-banner ez-banner" aria-labelledby="category-title">
    <?php if (cc_page_has('banner.image')) : ?><img class="category-banner-photo" src="<?php echo esc_url(cc_img(cc_page('banner.image'))); ?>" alt="<?php echo esc_attr(cc_page('banner.image_alt')); ?>" width="1920" height="823" fetchpriority="high"><?php endif; ?>
    <div class="site-container category-banner-content">
      <h1 id="category-title"><?php echo cc_html(cc_page('banner.title')); ?></h1>
      <?php if (cc_page_has('banner.lead')) : ?><p class="category-lead"><?php cc_page_e('banner.lead'); ?></p><?php endif; ?>
      <div class="category-actions">
        <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('banner.quote_label'); ?><?php echo cc_icon('arrow-right'); ?></a>
        <a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>" class="<?php echo cc_btn('outline', 'default', 'category-secondary'); ?>"><?php echo esc_html(trim(cc_page('banner.call_label') . ' ' . cc_content('company.phone'))); ?></a>
      </div>
    </div>
  </section>

  <section class="ez-section ez-intro" aria-labelledby="ez-intro-title"><div class="site-container ez-intro-grid">
    <div class="ez-intro-copy">
      <p class="ez-kicker"><?php cc_page_e('intro.kicker'); ?></p>
      <h2 id="ez-intro-title" class="ez-title"><?php echo cc_html(cc_page('intro.title')); ?></h2>
      <?php foreach (cc_page_list('intro.paragraphs') as $p) : ?><p class="ez-text"><?php echo esc_html($p); ?></p><?php endforeach; ?>
    </div>
    <ol class="ez-steps3"><?php foreach (cc_page_list('intro.steps') as $i => $s) : ?>
      <li><span class="ez-num"><?php echo $i + 1; ?></span><img src="<?php echo esc_url(cc_img($s['image'] ?? '')); ?>" alt="<?php echo esc_attr($s['alt'] ?? ''); ?>" width="400" height="400" loading="lazy" decoding="async"><h3><?php echo esc_html($s['title'] ?? ''); ?></h3><p><?php echo esc_html($s['text'] ?? ''); ?></p></li>
    <?php endforeach; ?></ol>
  </div></section>

  <section class="ez-section ez-gray" aria-labelledby="ez-solutions-title"><div class="site-container">
    <div class="ez-head is-center"><p class="ez-kicker"><?php cc_page_e('solutions.kicker'); ?></p><h2 id="ez-solutions-title" class="ez-title"><?php echo cc_html(cc_page('solutions.title')); ?></h2><p class="ez-sub"><?php cc_page_e('solutions.description'); ?></p></div>
    <div class="ez-cards"><?php foreach (cc_page_list('solutions.items') as $it) : ?>
      <article class="ez-card"><img src="<?php echo esc_url(cc_img($it['image'] ?? '')); ?>" alt="<?php echo esc_attr($it['alt'] ?? ''); ?>" width="600" height="450" loading="lazy" decoding="async"><div><h3><?php echo esc_html($it['title'] ?? ''); ?></h3><p><?php echo esc_html($it['text'] ?? ''); ?></p></div></article>
    <?php endforeach; ?></div>
  </div></section>

  <section class="ez-fit" aria-labelledby="ez-fit-title">
    <?php if (cc_page_has('fit.image')) : ?><img class="ez-fit-photo" src="<?php echo esc_url(cc_img(cc_page('fit.image'))); ?>" alt="<?php echo esc_attr(cc_page('fit.image_alt')); ?>" width="1920" height="823" loading="lazy" decoding="async"><?php endif; ?>
    <div class="site-container ez-fit-content">
      <div class="ez-head is-center"><p class="ez-kicker is-on-dark"><?php cc_page_e('fit.kicker'); ?></p><h2 id="ez-fit-title" class="ez-title is-on-dark"><?php echo cc_html(cc_page('fit.title')); ?></h2><p class="ez-sub is-on-dark"><?php cc_page_e('fit.description'); ?></p></div>
      <div class="ez-fit-grid"><div class="ez-fit-items"><?php foreach (cc_page_list('fit.items') as $it) : ?>
        <div><?php if (!empty($it['icon_img'])) : ?><img class="ez-icon-img" src="<?php echo esc_url(cc_img($it['icon_img'])); ?>" alt="" aria-hidden="true" width="48" height="48" loading="lazy"><?php else : echo $svg($it['icon'] ?? ''); endif; ?><h3><?php echo esc_html($it['title'] ?? ''); ?></h3><p><?php echo esc_html($it['text'] ?? ''); ?></p></div>
      <?php endforeach; ?></div>
      <p class="ez-tagline"><?php echo nl2br(esc_html(cc_page('fit.tagline'))); ?></p></div>
    </div>
  </section>

  <section class="ez-section" aria-labelledby="ez-process-title"><div class="site-container">
    <div class="ez-head is-center"><p class="ez-kicker"><?php cc_page_e('process.kicker'); ?></p><h2 id="ez-process-title" class="ez-title"><?php echo cc_html(cc_page('process.title')); ?></h2><p class="ez-sub"><?php cc_page_e('process.description'); ?></p></div>
    <ol class="ez-steps4"><?php foreach (cc_page_list('process.items') as $i => $s) : ?>
      <li><span class="ez-dot"><?php echo $i + 1; ?></span><h3><?php echo esc_html($s['title'] ?? ''); ?></h3><p><?php echo esc_html($s['text'] ?? ''); ?></p></li>
    <?php endforeach; ?></ol>
  </div></section>

  <section class="ez-section ez-gray" aria-labelledby="ez-why-title"><div class="site-container">
    <div class="ez-head is-center"><h2 id="ez-why-title" class="ez-title"><?php echo cc_html(cc_page('why.title')); ?></h2><p class="ez-sub"><?php cc_page_e('why.description'); ?></p></div>
    <div class="ez-why"><?php foreach (cc_page_list('why.items') as $it) : ?>
      <div><span class="ez-chip"><?php echo $svg($it['icon'] ?? ''); ?></span><div><h3><?php echo esc_html($it['title'] ?? ''); ?></h3><p><?php echo esc_html($it['text'] ?? ''); ?></p></div></div>
    <?php endforeach; ?></div>
  </div></section>

  <?php if (cc_page_has('faq.items')) : ?>
  <section class="ez-section ez-faq" aria-labelledby="faq-title" id="faq">
    <?php if (cc_page_has('faq.image')) : ?><img class="ez-splash" src="<?php echo esc_url(cc_img(cc_page('faq.image'))); ?>" alt="" aria-hidden="true" width="900" height="600" loading="lazy" decoding="async"><?php endif; ?>
    <div class="site-container ez-faq-grid">
      <div class="ez-faq-intro"><p class="ez-kicker">FREQUENTLY ASKED QUESTIONS</p><h2 id="faq-title" class="ez-title"><?php echo cc_html(cc_page('faq.title')); ?></h2><p class="ez-sub"><?php cc_page_e('faq.description'); ?></p></div>
      <div class="ez-faq-side">
        <div class="category-faq-list" data-orientation="vertical" data-accordion>
          <?php foreach (cc_page_list('faq.items') as $i => $faq) : ?>
            <div data-state="closed" data-orientation="vertical" class="border-b">
              <h3 data-orientation="vertical" data-state="closed" class="flex"><button type="button" aria-expanded="false" data-state="closed" data-orientation="vertical" id="faq-trigger-<?php echo $i; ?>" aria-controls="faq-panel-<?php echo $i; ?>" class="flex flex-1 items-center justify-between py-4 text-sm font-medium cursor-pointer transition-all hover:underline text-left category-faq-trigger"><span class="category-faq-question"><span class="category-faq-number"><?php echo $i + 1; ?>. </span><span><?php echo esc_html($faq['question'] ?? ''); ?></span></span><?php echo cc_icon('chevron-down', 'h-4 w-4 shrink-0 text-muted-foreground transition-transform duration-200'); ?></button></h3>
              <div data-state="closed" id="faq-panel-<?php echo $i; ?>" hidden role="region" aria-labelledby="faq-trigger-<?php echo $i; ?>" data-orientation="vertical" class="overflow-hidden text-sm data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"><div class="pb-4 pt-0 category-faq-answer"><p><?php echo esc_html($faq['answer'] ?? ''); ?></p></div></div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php if (cc_page_has('related.links')) : ?><div class="ez-related"><p class="ez-kicker">EXPLORE MORE</p><h2 class="ez-title is-small"><?php echo cc_html(cc_page('related.title')); ?></h2>
          <div class="category-related-links"><?php foreach (cc_page_list('related.links') as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'] ?? '')); ?>"><?php echo esc_html($link['label'] ?? ''); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div></div><?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
</main>
<?php get_footer();
