=== Gem ===
Contributors: webulous
Tags: custom-menu, featured-images, post-formats, right-sidebar, left-sidebar, sticky-post, threaded-comments, translation-ready, three-columns, two-columns, one-column, flexible-header, custom-background, custom-header, custom-colors, editor-style, full-width-template, rtl-language-support, theme-options
Requires at least: 5.0
Requires PHP: 7.0
Tested up to: 5.5.1
Stable tag: 1.1.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gem is best suited for all types of site and uses Theme Customizer.

== Description ==
Gem comes with modern, stylish and responsive design. It comes with 8 Page templates, so you can choose layout of site to your liking. It also has 7 Widget areas to display your widget wherever you like to. Nearly 100 customizer theme options lets you customize every aspect of your web page. It uses minimal 960 grid framework and SASS to keep stylesheet efficient and speeds up page loading time. It is best suited for any type of sites including Corporate/Business/Blog sites. Demo can be viewed here http://gem.webulous.in/ and support request can be made here https://www.webulousthemes.com/free-support-request/

== Frequently Asked Questions ==
= Installation =
1. Download and unzip `gem` theme
2. Upload the `gem` folder to the `/wp-content/themes/` directory
3. Activate the Theme through the 'Themes' menu in WordPress

= Setting Up Front Page =
1. By default, your front page looks like a blog. However, you can make it look like screenshot by following these steps.
2. Go to Dashboard => Appearance => Customize
3. Click on 'Static Front Page'
4. Select 'A static page' radio option
4. Select a static page for 'Front Page' and another page for 'Posts Page'
5. Click on 'Gem Options' panel
6. Select 'Home' Section
7. Select a category for 'Slider Posts Category'.
8. Enter no. of slides to show from above selected category.
9. Select 3 Pages for 'Services' sections
10. Select no. of recent posts to show on home page.

= How to change `Our Services` heading =
Make a Child Theme
Add following in `functions.php` file
`function childname_change_service_title($title) {
 	$title = __('Your Own Title','childname');
 	return $title;
 }
 add_filter('gem_service_title','childname_change_service_title');`

= How to control featured images visibility =

Go to Dashboard => Appearance => Customize.
Select 'Gem Options' Panel
Select 'Blog' section
Enable/Disable featured images visibility.    

== Changelog ==  

= 1.1.9 = 
* Customizer issue fixed.

= 1.1.8 = 
* WPForms Lite plugin action removed.

= 1.1.7 =
* Gutenberg unit test style added.

= 1.1.6 = 
* Added option for separate slider selecting option in Blog Page. 
* Updating .po file.

= 1.1.5 = 
* Scroll To top Enable/disable option added.
* WPForms Lite plugin recommended. 
* Alpha Option added in theme Options.

= 1.1.4 =
* Post Exclude Option added.

= 1.1.3 =
* Added site Creation Ads in Theme Upgrade Page. 

= 1.1.2 = 
* Kirki file updated and WP 4.9 compatible issue fixed. 

= 1.1.1 = 
 * Updated flexslider and font-awesome icons 

= 1.1.0 =
 * Add Filter & fix some minor issues

= 1.0.8 =
 * Site URL's changed
 * .po file updated.
 
= 1.0.7 =
* Added Header Background Video Option.

= 1.0.6 =
* Fix Breaking News Bug
* Added landing page templates

= 1.0.5 =   
* Added some customizer Options ( page title bar ) 
* Rename the template files
* Added Magazine homepage option
* Arrage the customizer options
* Added Breaking news option
* Footer widget area option
* Added a filter for responsive menu 
* Fix RTL style issue

= 1.0.4 =
* Remove get pro for free       

= 1.0.3 =
* Preview issue fixed

= 1.0.2 =
* Change to kirki customizer
* Added More Options

= 1.0.1 =
* WooCommerce support added
* Review issues fixed

= 1.0.0 =
* Review issues fixed

= 0.0.9 =
* Review issues fixed

= 0.0.8 =
* Initial Release

== Upgrade Notice ==

= 1.1.9 = 
* Customizer issue fixed.
  
== Resources ==
* {_s}, GPLv2
* {Skeleton}, MIT
* {Flexslider} © 2015 Woo Themes, GPLv2
* {FontAwesome} © Dave Gandy, SIL OFL 1.1 and MIT 
* screenshot.png © 2016 Pixabay, CC0
https://pixabay.com/en/amsterdam-night-canals-evening-1150319/
https://pixabay.com/en/women-modeling-style-skin-body-697927/
https://pixabay.com/en/seagull-bird-fly-animal-freedom-1511862/
https://pixabay.com/en/makeup-beauty-skincare-cosmetics-677200/