<?php
get_header();
$products = cc_products();
$first = $products[0] ?? ['name' => '', 'hero_line' => ''];
?>
<main>
  <section class="hero product-slideshow" aria-labelledby="hero-title" aria-roledescription="carousel" data-slideshow data-slides="<?php echo esc_attr(wp_json_encode(array_map(fn($p) => ['name' => $p['name'], 'heroLine' => $p['hero_line'], 'url' => cc_category_destination($p['name'], 'product')], $products))); ?>">
    <?php foreach ($products as $i => $product) : ?>
      <img class="hero-photo slideshow-photo" data-active="<?php echo $i === 0 ? 'true' : 'false'; ?>" src="<?php echo esc_url(cc_img($product['image'])); ?>" alt="" aria-hidden="true" width="1152" height="576" fetchpriority="<?php echo $i === 0 ? 'high' : 'auto'; ?>" loading="<?php echo $i === 0 ? 'eager' : 'lazy'; ?>">
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

  <section class="market-strip" aria-label="Markets served"><div class="site-container market-inner"><p class="market-label"><?php echo cc_html(cc_page('markets.label')); ?></p><div class="market-names"><?php foreach (cc_page_list('markets.items') as $market) : ?><p class="market-name"><?php echo esc_html($market); ?></p><?php endforeach; ?></div></div></section>

  <section id="products-supplies" class="section-space"><div class="site-container">
    <?php cc_section_title(cc_page('products.topic'), cc_page('products.heading'), cc_page('products.description')); ?>
    <div class="product-grid"><?php foreach ($products as $product) : ?><a class="product-item" href="<?php echo esc_url(cc_category_destination($product['name'], 'product')); ?>">
      <div class="product-image-wrap"><img src="<?php echo esc_url(cc_img($product['image'])); ?>" alt="<?php echo esc_attr($product['name']); ?>" width="1152" height="576" loading="lazy"></div>
      <div class="product-body"><h3><?php echo esc_html($product['name']); ?></h3><p><?php echo esc_html($product['description']); ?></p><span class="category-link"><?php cc_page_e('products.card_link_label'); ?> <span aria-hidden="true">→</span></span></div>
    </a><?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('products')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('products.button_label'); ?></a></div>
  </div></section>

  <section id="services" class="photo-band services-band section-space">
    <img class="band-photo" src="<?php echo esc_url(cc_img(cc_page('services.image'))); ?>" alt="<?php echo esc_attr(cc_page('services.image_alt')); ?>" width="1920" height="768" loading="lazy">
    <div class="site-container band-content">
      <?php cc_section_title(cc_page('services.topic'), cc_page('services.heading'), cc_page('services.description')); ?>
      <div class="service-list"><?php foreach (cc_services() as $service) : ?><a href="<?php echo esc_url(cc_category_destination($service['name'], 'service')); ?>"><?php echo esc_html($service['name']); ?><span class="service-arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter"><path d="M6 18 18 6M8 6h10v10"/></svg></span></a><?php endforeach; ?></div>
      <div class="section-actions"><a href="<?php echo esc_url(cc_url('services')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('services.button_label'); ?></a></div>
    </div>
  </section>

  <section id="industries" class="section-space"><div class="site-container">
    <?php cc_section_title(cc_page('industries.topic'), cc_page('industries.heading'), cc_page('industries.description')); ?>
    <div class="industry-list"><?php foreach (cc_industries() as $industry) : ?><a href="<?php echo esc_url(cc_url('industries')); ?>"><?php echo esc_html($industry); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('industries')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('industries.button_label'); ?></a></div>
  </div></section>

  <section class="photo-band difference-band section-space"><img class="band-photo" src="<?php echo esc_url(cc_img(cc_page('difference.image'))); ?>" alt="<?php echo esc_attr(cc_page('difference.image_alt')); ?>" width="1920" height="1024" loading="lazy"><div class="site-container band-content">
    <?php cc_section_title(cc_page('difference.topic'), cc_page('difference.heading')); ?>
    <div class="why-points"><?php foreach (cc_page_list('difference.points') as $point) : ?><p><?php echo cc_icon('check'); ?><?php echo esc_html($point); ?></p><?php endforeach; ?></div>
  </div></section>

  <section id="contracting" class="section-space contract-band"><div class="site-container">
    <?php cc_section_title(cc_page('contracting.topic'), cc_page('contracting.heading'), cc_page('contracting.description')); ?>
    <div class="contract-credentials"><?php foreach (cc_page_list('contracting.credentials') as $credential) : ?><span><?php echo esc_html($credential); ?></span><?php endforeach; ?></div>
    <div class="section-actions"><a href="<?php echo esc_url(cc_url('contracts')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('contracting.contracts_label'); ?></a><a href="<?php echo esc_url(cc_url('certifications')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('contracting.certifications_label'); ?></a></div>
  </div></section>

  <section id="about" class="about-section section-space">
    <div class="site-container about-layout"><img class="about-team-photo" src="<?php echo esc_url(cc_img(cc_page('about.image'))); ?>" alt="<?php echo esc_attr(cc_page('about.image_alt')); ?>" width="1024" height="693" loading="lazy">
    <div class="about-copy"><h2 class="section-topic"><?php cc_page_e('about.topic'); ?></h2><p class="section-heading"><?php cc_page_e('about.heading'); ?></p><?php foreach (cc_page_list('about.paragraphs') as $paragraph) : ?><p><?php echo esc_html($paragraph); ?></p><?php endforeach; ?><div class="section-actions"><a href="<?php echo esc_url(cc_url('about')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('about.button_label'); ?></a></div></div></div>
  </section>
</main>
<?php get_footer();
