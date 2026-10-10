<?php
/**
 * Template Name: Category Page
 *
 * Product/service category layout. All content comes from the page's "Page content" box;
 * sections left empty are not shown.
 */
get_header();
$title = cc_page('banner.title') ?: get_the_title();
$banner_image = cc_page('banner.image');
?>
<main class="category-page">

  <section class="category-banner" aria-labelledby="category-title">
    <?php if ($banner_image) : ?><img class="category-banner-photo" src="<?php echo esc_url(cc_img($banner_image)); ?>" alt="" aria-hidden="true" width="1152" height="576" fetchpriority="high"><?php endif; ?>
    <div class="site-container category-banner-content">
      <?php if (cc_page_has('banner.kicker')) : ?><p class="category-kicker"><?php cc_page_e('banner.kicker'); ?></p><?php endif; ?>
      <h1 id="category-title"><?php echo esc_html($title); ?></h1>
      <?php if (cc_page_has('banner.lead')) : ?><p class="category-lead"><?php cc_page_e('banner.lead'); ?></p><?php endif; ?>
      <div class="category-actions">
        <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('banner.quote_label'); ?><?php echo cc_icon('arrow-right'); ?></a>
        <a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>" class="<?php echo cc_btn('outline', 'default', 'category-secondary'); ?>"><?php echo esc_html(trim(cc_page('banner.call_label') . ' ' . cc_content('company.phone'))); ?></a>
      </div>
    </div>
  </section>
  <div class="site-container"><nav class="breadcrumbs" aria-label="Breadcrumb"><ol>
    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php cc_page_e('breadcrumb.home'); ?></a><?php echo cc_icon('chevron-right'); ?></li>
    <?php if (cc_page_has('breadcrumb.parent')) : ?><li><a href="<?php echo esc_url(cc_link(cc_page('breadcrumb.parent_link'))); ?>"><?php cc_page_e('breadcrumb.parent'); ?></a><?php echo cc_icon('chevron-right'); ?></li><?php endif; ?>
    <li aria-current="page"><?php echo esc_html(cc_page('breadcrumb.current') ?: get_the_title()); ?></li>
  </ol></nav></div>

  <div class="site-container">
    <?php if (cc_page_has('overview')) : ?>
    <section class="category-overview" aria-labelledby="overview-title">
      <h2 id="overview-title"><?php cc_page_e('overview.title'); ?></h2>
      <?php foreach (cc_page_list('overview.paragraphs') as $paragraph) : ?><p><?php echo esc_html($paragraph); ?></p><?php endforeach; ?>
      <?php if (cc_page_has('overview.image')) : ?><div class="category-figure"><img src="<?php echo esc_url(cc_img(cc_page('overview.image'))); ?>" alt="<?php echo esc_attr(cc_page('overview.image_alt')); ?>" width="1536" height="1024" loading="lazy"></div><?php endif; ?>
    </section>
    <?php endif; ?>

    <?php if (cc_page_has('equipment.items')) : ?>
    <section class="category-section" aria-labelledby="equipment-title">
      <div class="category-section-heading"><h2 id="equipment-title"><?php cc_page_e('equipment.title'); ?></h2><p><?php cc_page_e('equipment.description'); ?></p></div>
      <div class="equipment-grid"><?php foreach (cc_page_list('equipment.items') as $e) : ?><article class="equipment-item"><?php echo cc_icon($e['icon'] ?? ''); ?><h3><?php echo esc_html($e['title'] ?? ''); ?></h3><p><?php echo esc_html($e['description'] ?? ''); ?></p><ul><?php foreach ((array) ($e['items'] ?? []) as $item) : ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul></article><?php endforeach; ?></div>
    </section>
    <?php endif; ?>

    <?php if (cc_page_has('applications.items')) : ?>
    <section class="category-section" aria-labelledby="applications-title">
      <div class="category-section-heading"><h2 id="applications-title"><?php cc_page_e('applications.title'); ?></h2><p><?php cc_page_e('applications.description'); ?></p></div>
      <div class="category-projects"><?php foreach (cc_page_list('applications.items') as $a) : ?><div><h3><?php echo esc_html($a['title'] ?? ''); ?></h3><p><?php echo esc_html($a['description'] ?? ''); ?></p></div><?php endforeach; ?></div>
    </section>
    <?php endif; ?>

    <?php if (cc_page_has('inquiry.title') || cc_page_has('inquiry.items')) : ?>
    <section class="category-section" aria-labelledby="quote-title">
      <div class="category-section-heading"><h2 id="quote-title"><?php cc_page_e('inquiry.title'); ?></h2><?php foreach (cc_page_list('inquiry.paragraphs') as $paragraph) : ?><p><?php echo esc_html($paragraph); ?></p><?php endforeach; ?></div>
      <?php if (cc_page_has('inquiry.items')) : ?>
      <h3><?php cc_page_e('inquiry.checklist_title'); ?></h3>
      <div class="quote-checklist"><?php foreach (cc_page_list('inquiry.items') as $d) : ?><div><h4><?php echo esc_html($d['title'] ?? ''); ?></h4><p><?php echo esc_html($d['description'] ?? ''); ?></p></div><?php endforeach; ?></div>
      <?php endif; ?>
      <div class="category-actions"><a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_page_e('inquiry.button_label'); ?><?php echo cc_icon('arrow-right'); ?></a></div>
    </section>
    <?php endif; ?>

    <?php if (cc_page_has('faq.items')) : ?>
    <section class="category-section category-faq" aria-labelledby="faq-title" id="faq">
      <div class="category-section-heading"><h2 id="faq-title"><?php echo esc_html(cc_page('faq.title') ?: $title . ' FAQs'); ?></h2><p><?php cc_page_e('faq.description'); ?></p></div>
      <div class="category-faq-list" data-orientation="vertical" data-accordion>
        <?php foreach (cc_page_list('faq.items') as $i => $faq) : ?>
          <div data-state="closed" data-orientation="vertical" class="border-b">
            <h3 data-orientation="vertical" data-state="closed" class="flex"><button type="button" aria-expanded="false" data-state="closed" data-orientation="vertical" id="faq-trigger-<?php echo $i; ?>" aria-controls="faq-panel-<?php echo $i; ?>" class="flex flex-1 items-center justify-between py-4 text-sm font-medium cursor-pointer transition-all hover:underline text-left [&amp;[data-state=open]&gt;svg]:rotate-180 category-faq-trigger"><span class="category-faq-question"><span class="category-faq-number"><?php echo $i + 1; ?>.</span><span><?php echo esc_html($faq['question'] ?? ''); ?></span></span><?php echo cc_icon('chevron-down', 'h-4 w-4 shrink-0 text-muted-foreground transition-transform duration-200'); ?></button></h3>
            <div data-state="closed" id="faq-panel-<?php echo $i; ?>" hidden role="region" aria-labelledby="faq-trigger-<?php echo $i; ?>" data-orientation="vertical" class="overflow-hidden text-sm data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"><div class="pb-4 pt-0 category-faq-answer"><p><?php echo esc_html($faq['answer'] ?? ''); ?></p></div></div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endif; ?>

    <section class="category-section category-related" aria-labelledby="related-title">
      <?php if (cc_page_has('related.links')) : ?>
      <h2 id="related-title"><?php cc_page_e('related.title'); ?></h2>
      <div class="category-related-links"><?php foreach (cc_page_list('related.links') as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'] ?? '')); ?>"><?php echo esc_html($link['label'] ?? ''); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div>
      <?php endif; ?>
      <?php cc_shop_materials_cta(); ?>
    </section>
  </div>
</main>
<?php get_footer();
