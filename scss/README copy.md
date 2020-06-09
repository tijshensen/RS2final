# Templates for RS

## Setup

#### Folders:
* images (include png,jpg and svg)
* scss (add new scss files like this: rs-hero.scss)
* css (bootstrap-rs.css)
* js

#### Elements:
* _header.php
* _menu.php
* _footer.php

### Pages:
* homepage.php
* telehealth.php
* about.php
* news-all.php
* news-category.php
* news-single.php
* providers-all.php
* providers-single.php (includes: Digital Clinic, Online doctor, online pharmacy, online therapy, teeth straightening)
* conditions-all.php
* conditions-single.php
* medications-all.php
* medications.single.php

### Modules:
* modules-popular-conditions.php
* modules-trending-news.php
* modules-single-condition.php
* modules-single-provider.php
* modules-telehealt-categories.php


## Way of work:
* Before you start always check if there is an update in Github
* If something takes more than 5 minutes to figure it out, ask for help.
* Before you stop, share you progress with me.
* When you stop working, push your commits to Github.

#### Checklist
* Always start working on the mobile version first, before moving to tablet and desktop.
* Never put heximal codes in stylesheet accept in the _rs-colors.css.
* Never use CAPITALS, style them with text-transform: uppercase.
* After finishing a page, make sure that all the inline CSS is moved to the SCSS files. 


#### SCSS processor
* Prepros (or something simular)
* https://prepros.io/help/less
* Input: 'scss/bootstrap-rs.scss'
* Output: 'css/bootstrap-rs.css'
* Check - Auto compile
* Check - Source Map
* Output style - Nested
* Check - Autoprefixer


#### SVG
* SVG: Click on the icon in Figma, choose Export (select SVG)
* save in the map /img/
* include image like this <?php include('./img/online-doctor.svg');?>
* Open the SVG in the editor and remove fill="#xxxxxx"
* use SVG{fill: #f5f5f5;} css to give the svg a color

#### Breaking points
* https://getbootstrap.com/docs/4.4/layout/overview/#responsive-breakpoints

#### Schema.org
* https://search.google.com/structured-data/testing-tool/u/0/
* news-single.php












