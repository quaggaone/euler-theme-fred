0.0.5-pl []
---
- BREAKING `elr-grid` `row-cols` modifier now to apply on the container (not block root class)
  - class has been renamed (now `elr-grid__container--modifier`)
  - class is applied to `elr-grid__container` instead of `elr-grid`
  - added explicit `--row-cols-1` modifier
  - WHY: this fixes nesting issues with modals containing grids. (neccessary because of MODX implementation and usage -> "layer 3 content")
  - TODO AFTER UPDATE: use gitify and database extraction to change all FRED Element settings to new class (inside `_data/content/web` folder)

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
