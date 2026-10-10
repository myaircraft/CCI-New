<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="flex min-h-screen items-center justify-center bg-background px-4">
  <div class="max-w-md text-center">
    <h1 class="text-7xl font-bold text-foreground"><?php cc_e('page404.code'); ?></h1>
    <h2 class="mt-4 text-xl font-semibold text-foreground"><?php cc_e('page404.title'); ?></h2>
    <p class="mt-2 text-sm text-muted-foreground"><?php cc_e('page404.text'); ?></p>
    <div class="mt-6">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground transition-colors hover:bg-primary/90"><?php cc_e('page404.button_label'); ?></a>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
