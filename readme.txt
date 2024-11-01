=== autometa's TITUL ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, metadata, title, link
Requires at least: 2.5.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces publication titles and links in pages, posts, portfolios or products simply via: `[titul]` and `[titulink]`.
== Description ==

**autometa's TITUL** is a simple plugin that uses the following shortcodes:

* `[titul]`     = to reproduce the publication title;
* `[titulink]` = to reproduce the publication link.

**autometa's TITUL** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcodes in text fields: `[titul]`, `[titulink]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's TITUL** reproduces title-related data in special.

= How To =

Just write one or more of the following shortcodes inside a text field and between brackets as usual: `[titul]` and/or `[titulink]`.

= CSS Style Selectors =

* `#titul`    = `[titul]` ID;
* `#titulink` = `[titulink]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`get_permalink()`](https://developer.wordpress.org/reference/functions/get_permalink/)
* [`get_the_title()`](https://developer.wordpress.org/reference/functions/get_the_title/)
