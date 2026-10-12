<?php $logo = cc_img(cc_content('assets.logo')); ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="main-header" data-scrolled="false">
    <div class="brand-band"><div class="site-container brand-band-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(cc_content('company.name') . ' home'); ?>" class="brand-home"><span class="brand-logo header-brand-logo" role="img" aria-label="<?php echo esc_attr(cc_content('company.name')); ?>" style="mask-image:url(<?php echo esc_url($logo); ?>);-webkit-mask-image:url(<?php echo esc_url($logo); ?>)"></span></a>
      <button type="button" class="<?php echo cc_btn('ghost', 'icon', 'mobile-toggle'); ?>" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-navigation"><?php echo cc_icon('menu'); ?></button>
      <div class="nav-row">
        <nav class="primary-nav" aria-label="Main navigation">
          <?php foreach (cc_navigation() as $item) : if (!empty($item['link']) && empty($item['items'])) : ?>
            <a href="<?php echo esc_url(cc_link($item['link'])); ?>" class="<?php echo cc_btn('ghost', 'default', 'nav-control'); ?>" data-active="false" data-menu=""><?php echo esc_html($item['label']); ?></a>
            <?php continue; endif; ?>
            <button type="button" class="<?php echo cc_btn('ghost', 'default', 'nav-control'); ?>" data-active="false" data-menu="<?php echo esc_attr($item['id']); ?>" aria-expanded="false" aria-controls="desktop-navigation-menu-<?php echo esc_attr($item['id']); ?>"><?php echo esc_html($item['label']); ?><?php echo cc_icon('chevron-down'); ?></button>
          <?php endforeach; ?>
          <?php foreach (cc_navigation() as $item) : if (empty($item['items'])) continue; ?>
            <div class="mega-menu" id="desktop-navigation-menu-<?php echo esc_attr($item['id']); ?>" data-menu-panel="<?php echo esc_attr($item['id']); ?>" hidden><div class="mega-inner">
              <div class="mega-links"><?php foreach ($item['items'] as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'])); ?>"><span><?php echo esc_html($link['label']); ?></span><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?></div>
            </div></div>
          <?php endforeach; ?>
        </nav>
        <a href="<?php echo esc_url(cc_url('shop')); ?>" class="<?php echo cc_btn('shop', 'default', 'desktop-quote cc-shop-btn'); ?>"><?php echo cc_icon('shopping-cart'); ?><?php cc_e('header.shop_label'); ?></a>
      </div>
    </div></div>
    <nav class="mobile-navigation" id="mobile-navigation" aria-label="Mobile navigation" hidden>
      <?php foreach (cc_navigation() as $group) : if (!empty($group['link']) && empty($group['items'])) : ?>
        <div class="mobile-category"><a class="mobile-category-link" href="<?php echo esc_url(cc_link($group['link'])); ?>"><?php echo esc_html($group['label']); ?></a></div>
      <?php continue; endif; ?>
        <div class="mobile-category">
          <button type="button" class="<?php echo cc_btn('ghost', 'default', 'mobile-category-toggle'); ?>" aria-expanded="false" aria-controls="mobile-category-<?php echo esc_attr($group['id']); ?>">
            <span><?php echo esc_html($group['label']); ?></span><?php echo cc_icon('plus'); ?>
          </button>
          <div class="mobile-category-links" id="mobile-category-<?php echo esc_attr($group['id']); ?>" hidden>
            <?php foreach ($group['items'] as $link) : ?><a href="<?php echo esc_url(cc_link($link['link'])); ?>"><?php echo esc_html($link['label']); ?><?php echo cc_icon('arrow-right'); ?></a><?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="mobile-menu-actions">
        <a href="<?php echo esc_url(cc_url('shop')); ?>" class="<?php echo cc_btn('shop', 'default', 'mobile-shop cc-shop-btn'); ?>"><?php echo cc_icon('shopping-cart'); ?><?php cc_e('header.shop_label'); ?></a>
        <a href="<?php echo esc_attr(cc_content('company.phone_href')); ?>" class="<?php echo cc_btn('call'); ?>"><?php echo cc_icon('phone'); ?><?php cc_e('company.phone'); ?></a>
        <a href="mailto:<?php echo esc_attr(cc_content('company.email')); ?>" class="<?php echo cc_btn('outline', 'default', 'mobile-email'); ?>"><?php echo cc_icon('mail'); ?><?php cc_e('company.email'); ?></a>
        <a href="<?php echo esc_url(cc_url('contact')); ?>" class="<?php echo cc_btn(); ?>"><?php cc_e('header.quote_label'); ?><?php echo cc_icon('arrow-right'); ?></a>
      </div>
    </nav>
  </div>
</header>
