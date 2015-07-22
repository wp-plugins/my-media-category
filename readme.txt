===  My Media Category  ===
Contributors: <a href ="https://wordpress.org/support/profile/hemant-ahir" target="_blank" >Ahir Hemant</a>
Donate link: http://www.idreamwebsolutions.com/
Tags: taxonmies, taxonomy, attachment, attachments, media, categories, category, tag, tags
Requires at least: 3.8
Tested up to: 4.2.2
Stable tag: 2.6
License: GPLv2 and (components under MIT License)
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Taxonomy In media Library provides better support for media and attachments in WordPress.

== Installation ==

Upload the media-category plugin to your WordPress plugins folder (/wp-content/plugins) or install it via your WordPress admin. Then activate it from the plugin admin page.

This function can be called from any template file to get attached images from Specific category
It returns an array of the attached image URL.

Example:

$query_images_args = array(
    'post_type' => 'attachment',
 'post_mime_type' =>'image',
 'post_status' => 'inherit',
 'posts_per_page' => -1,
 'tax_query' => array(
        array(
            'taxonomy' => 'YOUR TAXONOMY',
            'field' => 'slug',
            'terms' => YOUR TERM)));

== Frequently Asked Questions ==

<h4>Que1.How install plugin in my WordPress site ?</h4>
<p>Ans1. Now its easy please follow this link and you will found best solution http://codex.wordpress.org/Managing_Plugins</p>

<h4>Que2. How to use My Media Category plugin ?</h4>
<p>its very Easy, You can Create Multiple category and from category you get whatever you want.</p>
Enjoy!!

== Screenshots ==
No image for this
== Changelog ==
* First version.
