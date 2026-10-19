<?php
get_header();
$products = cc_products();
$first = $products[0] ?? ['name' => '', 'hero_line' => ''];
?>
<main>
  <section class="hero product-slideshow" aria-labelledby="hero-title" aria-roledescription="carousel" data-slideshow data-slides="<?php echo esc_attr(wp_json_encode(array_map(fn($p) => ['name' => $p['name'], 'heroLine' => $p['hero_line'], 'url' => cc_category_destination($p['name'], 'product')], $products))); ?>">
    <?php foreach ($products as $i => $product) : ?>
      <?php if (!empty($product['mobile_image'])) : ?><picture><source media="(max-width: 767px)" srcset="<?php echo esc_url(cc_img($product['mobile_image'])); ?>"><?php endif; ?><img class="hero-photo slideshow-photo" data-active="<?php echo $i === 0 ? 'true' : 'false'; ?>" src="<?php echo esc_url(cc_img($product['image'])); ?>" alt="" aria-hidden="true" width="1152" height="576" fetchpriority="<?php echo $i === 0 ? 'high' : 'auto'; ?>" loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>"><?php if (!empty($product['mobile_image'])) : ?></picture><?php endif; ?>
    <?php endforeach; ?>
    <div class="slide-arrow-rail" data-side="start">
      <button type="button" class="<?php echo cc_btn('ghost', 'icon', 'slide-arrow'); ?>" aria-label="Previous slide" title="Previous slide" data-slide-prev><?php echo cc_icon('arrow-left'); ?></button>
    </div>
    <div class="slide-arrow-rail" data-side="end">
      <button type="button" class="<?php echo cc_btn('ghost', 'icon', 'slide-arrow'); ?>" aria-label="Next slide" title="Next slide" data-slide-next><?php echo cc_icon('arrow-right'); ?></button>
    </div>
    <div class="site-container hero-content">
      <p class="eyebrow"><?php cc_page_e('hero.eyebrow'); ?></p>
      <h1 id="hero-title"><?php echo cc_html(cc_page('hero.title')); ?></h1>
      <div class="slide-category" role="group" aria-roledescription="slide" aria-label="1 of <?php echo count($products); ?>">
        <h2 aria-label="<?php echo esc_attr($first['name']); ?>"><span aria-hidden="true"><?php echo esc_html($first['name']); ?><span class="type-caret"></span></span></h2><p><?php echo esc_html($first['hero_line']); ?></p>
      </div>
      <div class="hero-actions">
        <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn('heroQuote', 'lg'); ?>"><?php cc_page_e('hero.quote_label'); ?></a>
        <a href="<?php echo esc_url(cc_category_destination($first['name'], 'product')); ?>" class="<?php echo cc_btn('heroOutline', 'lg', 'hero-explore'); ?>" data-slide-explore><?php cc_page_e('hero.explore_label'); ?><?php echo cc_icon('arrow-right'); ?></a>
      </div>
    </div>
    <nav class="slide-dots" aria-label="Choose product slide">
      <?php foreach ($products as $i => $product) : ?>
        <button type="button" class="<?php echo cc_btn('ghost', 'icon', 'slide-dot'); ?>" aria-label="Show <?php echo esc_attr($product['name']); ?>"<?php echo $i === 0 ? ' aria-current="true"' : ''; ?> title="<?php echo esc_attr($product['name']); ?>" data-slide-to="<?php echo $i; ?>"><span aria-hidden="true"></span></button>
      <?php endforeach; ?>
    </nav>
  </section>

  <section class="proof-bar" aria-label="Why buyers choose Competitive Choice"><div class="site-container"><ul><?php foreach (cc_page_list('proof.items') as $item) : ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul><?php if (cc_page_has('face.text')) : ?><p class="proof-face"><?php cc_page_e('face.text'); ?></p><?php endif; ?></div></section>

  <section id="pillars" class="section-space"><div class="site-container">
    <?php cc_section_title(cc_page('pillars.topic'), cc_page('pillars.heading'), cc_page('pillars.description')); ?>
    <div class="pillar-grid"><?php foreach (cc_page_list('pillars.items') as $pillar) : ?>
      <a class="pillar-card" href="<?php echo esc_url(cc_link($pillar['link'] ?? '')); ?>"><?php if (!empty($pillar['image'])) : ?><img class="pillar-photo" src="<?php echo esc_url(cc_img($pillar['image'])); ?>" alt="<?php echo esc_attr($pillar['image_alt'] ?? ''); ?>" width="1200" height="800" loading="lazy" decoding="async"><?php endif; ?><h3><?php echo esc_html(cc_tc($pillar['title'] ?? '')); ?></h3><p><?php echo esc_html($pillar['text'] ?? ''); ?></p><span class="pillar-link"><?php echo esc_html($pillar['label'] ?? 'LEARN MORE'); ?><?php echo cc_icon('arrow-right'); ?></span></a>
    <?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('products')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('products.button_label'); ?></a><a href="<?php echo esc_url(cc_url('services')); ?>" class="<?php echo cc_btn('outline'); ?>"><?php cc_page_e('services.button_label'); ?></a></div>
  </div></section>

  <?php if (cc_page_has('fclx.heading')) : ?>
  <section id="fclx" class="section-space fclx-feature"><div class="site-container fclx-layout">
    <div class="fclx-copy"><h2 class="section-topic"><?php echo esc_html(cc_tc(cc_page('fclx.topic'))); ?></h2><p class="section-heading"><?php echo esc_html(cc_tc(cc_page('fclx.heading'))); ?></p><p class="section-description"><?php cc_page_e('fclx.hook'); ?></p>
      <div class="section-actions"><a href="<?php echo esc_url(cc_link('/fire-suppression/')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('fclx.button_label'); ?><?php echo cc_icon('arrow-right'); ?></a><a href="<?php echo esc_url(cc_link('link:fclx_specs')); ?>" class="<?php echo cc_btn('outline'); ?>" target="_blank" rel="noopener noreferrer"><?php cc_page_e('fclx.specs_label'); ?><?php echo cc_icon('arrow-up-right'); ?></a></div></div>
    <figure class="fclx-media"><button type="button" class="demo-play" data-gif="<?php echo esc_url(cc_img(cc_page('fclx.gif'))); ?>" aria-label="Play the FCL-X demonstration"><img src="<?php echo esc_url(cc_img(cc_page('fclx.image'))); ?>" alt="<?php echo esc_attr(cc_page('fclx.image_alt')); ?>" width="640" height="360" loading="lazy" decoding="async"><span class="demo-play-label"><?php echo cc_icon('arrow-right'); ?>PLAY DEMO</span></button></figure>
  </div></section>
  <?php endif; ?>

  <section id="industries" class="section-space"><div class="site-container">
    <?php cc_section_title(cc_page('industries.topic'), cc_page('industries.heading'), cc_page('industries.description')); ?>
    <div class="industry-list"><?php foreach (cc_page_list('industries.items') as $industry) : ?><a class="industry-item" href="<?php echo esc_url(cc_link($industry['link'] ?? 'link:industries')); ?>"><strong><?php echo esc_html(cc_tc($industry['title'] ?? '')); ?></strong><span><?php echo esc_html($industry['text'] ?? ''); ?></span></a><?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('industries')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('industries.button_label'); ?></a></div>
  </div></section>

  <section class="photo-band difference-band section-space"><img class="band-photo" src="<?php echo esc_url(cc_img(cc_page('difference.image'))); ?>" alt="<?php echo esc_attr(cc_page('difference.image_alt')); ?>" width="1920" height="1024" loading="lazy"><div class="site-container band-content">
    <?php cc_section_title(cc_page('difference.topic'), cc_page('difference.heading')); ?>
    <div class="why-points"><?php foreach (cc_page_list('difference.points') as $point) : ?><p><?php echo cc_icon('check'); ?><span><strong><?php echo esc_html($point['title'] ?? ''); ?></strong> <?php echo esc_html($point['text'] ?? ''); ?></span></p><?php endforeach; ?></div>
    <?php if (cc_page_has('quote.text')) : ?><blockquote class="quote-slot"><p><?php cc_page_e('quote.text'); ?></p><cite><?php cc_page_e('quote.by'); ?></cite></blockquote><?php endif; ?>
  </div></section>

  <section id="contracting" class="section-space contract-band"><div class="site-container">
    <?php cc_section_title(cc_page('contracting.topic'), cc_page('contracting.heading'), cc_page('contracting.description')); ?>
    <div class="contract-credentials"><?php foreach (cc_page_list('contracting.credentials') as $credential) : ?><span><?php echo esc_html($credential); ?></span><?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('contracts')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('contracting.contracts_label'); ?></a><a href="<?php echo esc_url(cc_url('certifications')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('contracting.certifications_label'); ?></a></div>
  </div></section>

  <section id="about" class="about-section section-space">
    <div class="site-container about-layout"><img class="about-team-photo" src="<?php echo esc_url(cc_img(cc_page('about.image'))); ?>" alt="<?php echo esc_attr(cc_page('about.image_alt')); ?>" width="1024" height="693" loading="lazy">
    <div class="about-copy"><h2 class="section-topic"><?php echo esc_html(cc_tc(cc_page('about.topic'))); ?></h2><p class="section-heading"><?php echo esc_html(cc_tc(cc_page('about.heading'))); ?></p><?php foreach (cc_page_list('about.paragraphs') as $paragraph) : ?><p><?php echo esc_html($paragraph); ?></p><?php endforeach; ?><div class="section-actions"><a href="<?php echo esc_url(cc_url('about')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('about.button_label'); ?></a></div></div></div>
  </section>
</main>
<?php get_footer();
