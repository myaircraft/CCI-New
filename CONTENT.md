# Managing site content

## Each page's content: on the page itself

- **Pages → Add Category Page** creates a page with the **Category Page** template. Its edit screen
  has a **Page content** box with Banner, Breadcrumb, Introduction, Equipment cards, Applications,
  Quote checklist, FAQs, Related links and SEO. Sections left empty are hidden on the page.
- **Duplicate** (in the Pages list, on any category page) copies a page's content into a new draft.
  The banner title, breadcrumb, FAQ heading and SEO fields are cleared so they follow the new page title.
- **Home** has a **Homepage content** box with every homepage section.
- An existing page becomes a category page by choosing *Category Page* under Page Attributes →
  Template, saving, and reloading the screen.
- Other pages and posts use the normal block editor.

Page content is stored in the page's `_cc_content` post meta.

## Shared content: Site Content

**wp-admin → Site Content** holds what every page shares: company details and links, header and
navigation, the product/service lists (the product list also drives the homepage slideshow), footer,
the shop button on category pages, the SEO fallback and the 404 page. It is stored in the
`wp_cc_content` table, one row per key (`value_type` is `text` or `json`).

## Field formats

- **Images**: *Choose image* picks from the Media Library. A bare file name (`product-power.jpg`)
  is served from the theme's `assets/images/`.
- **Links**: `link:contact` (any Site Content link), `product:<name>`, `service:<name>`,
  `/page-on-this-site/`, or a full URL. To link a product in the menu or slideshow to a new category
  page, set that product's *Path* under Site Content → Products & Services.
- **Line breaks**: the homepage hero title, markets label and footer heading accept `<br>` and `<span>`.
- **`{year}`** in the footer copyright becomes the current year.
- **Icons**: equipment `zap`, `circuit-board`, `shield-check`; social `facebook`, `instagram`,
  `linkedin`, `youtube`, `x-logo`.

## For developers

- `inc/pages.php`: page kinds, `cc_page()` accessors, migration. `inc/admin-pages.php`: the page box,
  Add Category Page and Duplicate. `inc/admin-fields.php`: the shared form builder.
- `inc/page-seed.php` holds the starting content for the Home and Power Distribution pages;
  `inc/content-seed.php` holds the starting Site Content rows. Both are used only when nothing is saved yet.
- To add a field to category pages, add it to `cc_page_shape()` in `inc/admin-pages.php` and use
  `cc_page('section.field')` in `template-category.php`.
