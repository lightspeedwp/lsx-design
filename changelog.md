# LSX Design Changelog

## [[1.4.1]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.4.1)

### Updated
- CSS updates for the My Account Icon [34dbbc](https://github.com/lightspeedwp/lsx-design/commit/34dbbc4e8ee7596bba6e8230f89c1223c59ec52f)
- CSS updates for the Search Icon and Input in the header. [0ba737](https://github.com/lightspeedwp/lsx-design/commit/0ba7371db02d11dcef6c31a9989eb1917200a621)

#### Security
- General testing to ensure compatibility with latest WordPress version (6.8.1).

## [[1.4.0]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.4.0)

### LSX
#### Added
- Include WordPress 6.6 Grid Block compatibility with theme
- - Grid Block - Mobile compatibility - [#137](https://github.com/lightspeedwp/lsx-design/issues/137).
- - Grid Block - Image cover display issues & theme compatibility - [#135](https://github.com/lightspeedwp/lsx-design/issues/135)
- Added Group Block style - Shadow effect block styles for Group
- - Pagination Block style - Square Pagenation Block style added to theme

#### Updated
- theme.json schema updated to version - [#139](https://github.com/lightspeedwp/lsx-design/issues/139).
- theme.json default font and spacing sizes have been disabled.

#### Fixed
- Button Text Transforms not working - [#141](https://github.com/lightspeedwp/lsx-design/issues/141)
- Button hover has no underline - [#117](https://github.com/lightspeedwp/lsx-design/issues/117)
- Group Block - Group Block style - Not display in Site Editor - [#145](https://github.com/lightspeedwp/lsx-design/issues/145)
- Search results template update - No Results Block added back to template - [#143](https://github.com/lightspeedwp/lsx-design/issues/143)
- All buttons to have underline + Removing uneccesary code - [#148](https://github.com/lightspeedwp/lsx-design/issues/141)

#### Security
- General testing to ensure compatibility with latest WordPress version (6.6).



## [[1.3.1]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.3.1)

### LSX
#### Updated
- woocommerce.css - styling improvements for Cart & Checkout 
- style.css - Pagenation styling updates and improvements, hovers, active states 

## [[1.3.0]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.3.0)

### LSX

#### Added
- Added WordPress 6.5 Compatibility
- theme.json added custom colour pallette to imrpove colour selections - [#91](https://github.com/lightspeedwp/lsx-design/issues/91)
- theme.json added Shadow preset options as per designs with 6 sizing presets
- Block styles created for
- - Login/Log out Block style with 2 variations
- - List Block style - 4 Options which include custom icons - Arow & Ticks for White/dark depending on background - [#100](https://github.com/lightspeedwp/lsx-design/issues/100). 
- - Columns - Column seperator Block styling including Shadow Block style using presets - [#101](https://github.com/lightspeedwp/lsx-design/issues/101)
- - Image Block style, added option for Dark inner border 
- - Quote Block style
- - Search Block style - Header Full expand - [#123](https://github.com/lightspeedwp/lsx-design/issues/123)
- - Post Template Block style - Reposition Term list on image
- - Term List block style - Badge designs for Term lists 3 options available, Primary, Secondary & White
- New Pattern added for Query block - 3 coloumn card layout
- Template parts updated for posts 2-4 columns, post stack, product-collection, related products, title section
- New template added for author.html & page-wide.html
- Accessibility with ARIA labels and keyboard navigation

#### Updated
- Updated theme.json to refine theme settings and configurations.
- button.css - Button Block styles changes, removed custom designs fro the Default & Outline button and created new Block styles for LSX buttons - [#94](https://github.com/lightspeedwp/lsx-design/issues/94) & [#109](https://github.com/lightspeedwp/lsx-design/issues/109)
- Improved CSS for better responsiveness and visual consistency across the theme included editor conflicts - [#98](https://github.com/lightspeedwp/lsx-design/issues/98)
- updated class-block-setup.php to register new Patterns
- updated class-block-style.php to register new Block styles
- Template parts updated for breadcrumbs, checkout, comments, header-cta
- All templates updated with spacing & layout to be uniform with margin/padding & presets 
- Screenshot update
- User guide and developer notes
- Updated the theme name in the readme and the style.css description.

#### Improved
- Image handling techniques
- Code optimization for better performance

#### Removed
- Removed extra fonts like Lora, Montserrat and few other fonts to optimize performance and streamline design.

### WooCommerce

#### Added
- New Woocomemrce patterns added, featured-products, on sale products, top rated with 3 different card designs

#### Updated
- Updated woocommerce.css for better colour and layout compatibility with updated theme

## [[1.2.0]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.2.0) 

### LSX

#### Added
- Added WordPress 6.4.2 Compatibility
- Added new Block Styles for Heading and Paragraph blocks [#75](https://github.com/lightspeedwp/lsx-design/issues/75), [#76](https://github.com/lightspeedwp/lsx-design/pull/76)
- Added new template parts for LSX Sharing, Yoast Breadcrumbs, Post Meta and Woo Distraction Free Header [#71](https://github.com/lightspeedwp/lsx-design/pull/71)
- WooCommerce - Added support for Woo’s new store editing capabilities & support for all Woo blocks [#70](https://github.com/lightspeedwp/lsx-design/pull/70)
- The Events Calendar Plugin - Block Compatability [#52](https://github.com/lightspeedwp/lsx-design/issues/52), [#78](https://github.com/lightspeedwp/lsx-design/pull/78), [#79](https://github.com/lightspeedwp/lsx-design/pull/79)
- Sensei LMS Plugin - Block Compatability [#45](https://github.com/lightspeedwp/lsx-design/issues/45)
- Added an underline to text links to improve accessibility

#### Updated
- Updated colour scheme to be use an accessible colour palette
- Updated buttons, menus and links to use accessible colours
- Updated WordPress & Woo blocks, patterns, template parts and templates to use new accessible colour palette
- Updated block groups with a consistent structure to ensure better mobile compatability out the box
- Updated Header mobile responsiveness [#53](https://github.com/lightspeedwp/lsx-design/issues/53), [#55](https://github.com/lightspeedwp/lsx-design/pull/55)
- Improved mobile menu usability, focused on placement and functionality [#47](https://github.com/lightspeedwp/lsx-design/pull/47), [#66](https://github.com/lightspeedwp/lsx-design/pull/66)
- Updated blog index, blog category archives, blog tag archives, blog author archives & blog single templates [#81](https://github.com/lightspeedwp/lsx-design/pull/81)
- Updated Search Results block template [#81](https://github.com/lightspeedwp/lsx-design/pull/81)
- Updated 404, No Title & Pages block templates [#81](https://github.com/lightspeedwp/lsx-design/pull/81)
- Updated Gravity Forms default styles [#56](https://github.com/lightspeedwp/lsx-design/issues/56)

#### Removed
- Unused Heading & paragraph block styles removed
- Child theme - Remove theme attribute from Parent wp:template-part tags [#54](https://github.com/lightspeedwp/lsx-design/issues/54) [#63](https://github.com/lightspeedwp/lsx-design/pull/63)

### Fixed
- Fixed Site Editor Bugs [#65](https://github.com/lightspeedwp/lsx-design/issues/65), [#81](https://github.com/lightspeedwp/lsx-design/pull/81)
- Fixed Footer padding issues on Desktop and Mobile [#69](https://github.com/lightspeedwp/lsx-design/pull/69)
- LSX Sharing Compatability

### WooCommerce

#### Added
- Added Woo 8.4 compatibility 
- Added Woo Distraction Free Header [#83](https://github.com/lightspeedwp/lsx-design/issues/83)
- Added block specific assets & stylesheets for Woo Blocks [#68](https://github.com/lightspeedwp/lsx-design/pull/68)
- Added Order Confirmation Block Template [#61](https://github.com/lightspeedwp/lsx-design/issues/61), [#64](https://github.com/lightspeedwp/lsx-design/pull/64)
- Added Block Templates for the new Cart & Checkout Block default experience
- Added "No Results" message to the Product Search Results block template [#29](https://github.com/lightspeedwp/lsx-design/issues/29)

#### Updated
- Updated Single Product Block Template
- All product archives now use the Product Collection Block [#60](https://github.com/lightspeedwp/lsx-design/issues/60), [#70](https://github.com/lightspeedwp/lsx-design/pull/70)
 - Updated Product Search Results Block Template [#67](https://github.com/lightspeedwp/lsx-design/issues/67)
 - Updated Product Catalogue Archive Block Template
 - Updated Product Category Archive Block Template
 - Updated Product Tag Archive Block Template
 - Updated Product Attributes Archive Block Template

### Fixed
- Fixed issues with the Site Editor and Woo Blocks [#73](https://github.com/lightspeedwp/lsx-design/pull/73), [#74](https://github.com/lightspeedwp/lsx-design/issues/74)


## [[1.1.0]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.1.0)

### Added
- Accessibility for the Yoast FAQ block #15
- Search "no results" block #19
- Dark style variation #25
- Support for the new WordPress Details Block #36

### Fixed
- Cart Cross Sells block title display #4
- Increases the padding between the menu items and the submenus #16
- Mobile Menu Breakpoints were updated #17
- Search results pagination #18
- Archives: The category covering the post title on small screens #20
- CSS Custom variables in patterns and templates #24

### Updated
- Broken links in the Github readmes. #27 + #31

### Security
- General testing to ensure compatibility with latest WordPress version (6.3).

## [[1.0.4]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.0.4)

### Security
- General testing to ensure compatibility with latest WordPress version (6.2.2).

## [[1.0.3]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.0.3)

### Security
- General testing to ensure compatibility with latest WordPress version (6.2.1).

## [[1.0.2]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.0.2)

### Fixed
- Skip to content links.
- Sticky header issue.
- Navigation hover colour issues.
- Mobile menu display issues.

## [[1.0.1]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.0.1)

### Fixed
- Block validation errors.

### Updated
- Theme screenshot

### Added
- Licences for images and assets to the readme.txt

## [[1.0.0]](https://github.com/lightspeedwp/lsx-design/releases/tag/1.0.0)

### Added

- First Version.
