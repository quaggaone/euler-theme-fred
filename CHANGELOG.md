0.0.6-pl [2025-05-30]
---
- ADDED filter by blog template for `populated grid`
- FIXED layout modifier for `populated grid`
- ADDED `aspect-ratio` and `object-fit` options to regular `grid`
- FIX `elr-card` layout (text spacing and media handling)
- ADDED `elr-grid` modifier: `row-cols-5`
- ADDED `elr-card__logo` class for company logos on cards
- CHANGE look of links (`elr-link()` mixin)
- CHANGE removed borders/padding on `elr-cta`
- ADDED `elr-header` height modifier classes
- ADDED `elr-header` `--bg-media-medium` option (with colored bg on text-box)
- FIX footer company name (use setting `site_name`)
- FIX footer LinkedIn link

0.0.5-pl [2025-05-28]
---
- CHANGE removed `card` padding around media
- FIX image aspect-ratio not working on `card` media
- BREAKING `elr-grid` `row-cols` modifier now to apply on the container (not block root class)
  - class has been renamed (now `elr-grid__container--modifier`)
  - class is applied to `elr-grid__container` instead of `elr-grid`
  - added explicit `--row-cols-1` modifier
  - WHY: this fixes nesting issues with modals containing grids. (neccessary because of MODX implementation and usage -> "layer 3 content")
  - TODO AFTER UPDATE: use gitify and database extraction to change all FRED Element settings to new class (inside `_data/content/web` folder)
- ADDED `elr-grid` modifier: `row-cols-6` & `blog-style` (centered column at 50% width)
- CHANGE all `headings` to a condensed font-family
- ADDED section spacer modifiers to standalone and layout elements
- ADDED `aspect-ratio` and `object-fit` adjustments for many images elements/containers

0.0.4-pl [2025-03-24]
---
- added Snippet and System Setting for displaying Blog Types on Cards
- added Populated Grid with Filters
- correct display of Autotag TVs

0.0.3-pl [2025-03-23]
---
- changed data-fred-name on accordion headings to make it work at all (existing headings will disappear)
- renamed TV `elr_og_image_caption` to `elr_subtitle` to reflect real world usage (rename before upgrade to avoid having both TVs and migrating existing data)
- adjusted layout-card layout
- adjusted TVs for Partner Template
- added Value Card Template
- added Blog Text Element
- added Snippet for dynamic loading of resource children for select-types in TVs (customizable through system settings)
- added Team Member Template with respective TVs

0.0.2-pl [2025-03-22]
---
- added Blog, Book and Partner Templates with their TVs

0.0.1-pl [2025-03-21]
---
- Initial Release
