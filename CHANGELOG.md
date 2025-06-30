0.0.14 [2025-06-30]
---
- FIX contact form company field

0.0.13-pl [2025-06-30]
---
- FIX RSS Feed validation/encoding issues
- FIX removed default BCC mail address from contact form
- ADD ReCaptcha dependency for FormIt forms

0.0.12-pl [2025-06-21]
---
- FIX display logo not `og_image` on partner pages
- FIX sitemap generation behaviour (ignore `site_unavailable_page` value if `0`)
- FIX turn off sitemap cache
- FIX RSS Feed encoding (special characters need to be HTML encoded)

0.0.11-pl [2025-06-20]
---
- RENAME `elrGetTemplatePorperty` to `elrGetTemplateProperty` (notice the 'P***ro***perty') -> rename this before upgrade to be sure
- ADD new PHP snippets for cleaner image resizing implementation
- FIX responsive image sizing (pthumb placeholders are only substituted all at the end and therefore need to be unique)
- ADD RSS Feed advertising to `head` (works with all children of the feeds container)
- FIX delimiters on the front end

0.0.10-pl [2025-06-18]
---
- ADD RSS Feed chunk for easy implementation
- ADD sitemap chunk for easy implementation
  (`site_unavailable_page` sytem setting must not equal 0; other euler system setting IDs must also be set)
- ADD responsive image sizing (not for `display list`)
- ADD FRED element for contact forms

0.0.9-pl [2025-06-13]
---
- FIX change rfs implementation on card fonts for upper resizing limit (non-fluid rfs value)

0.0.8-pl [2025-06-13]
---
- ADD global `elr-subtitle` mixin
- ADD title class for team-member pages
- FIX blog author reference is now a link
- FIX `font-size` on cards for certain column layouts
- FIX `heading` font resizing on cards now for all headings (fix for RTE inserted heading without proper class)
- FIX removed `card` media background (option to readd on `grid` -> not implemented in front end; manual dev implementation for team grid possible)
- ADD persistent (`always`) colors to all specific color CSS variables
- ADD new transparent look to `card`, `accordion` and `cta` (with option to specify using global modifier higher up in the DOM and then reoverride on the specific block)
- ADD `meta__info-start` and `meta__info-end` classes for more general meta head left/right alignment (author info, date, linkedin, contact button)
- ADD linkedin link to team member page

0.0.7-pl [2025-06-08]
---
- FIXED `elr-header--bg-media-medium` background color in dark mode
- FIX make `elr-card` titles smaller for high-column grids
- FIX `elr-accordion` button `font-width` to support custom formatting
- ADDED `elr-accordion` custom formattting for button
- ADDED `populated grid` custom link+text for further reading reference
- FIX cards on `populated grid` now behave as proper links
- ADD `team member title` to front of card
- FIX display corresponding data on cards for the specific pages template (applies to `populated grid`)

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
