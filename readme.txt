=== Theme Blvd Simple Permalink ===
Contributors: themeblvd
Tags: themeblvd, permalink, URL
Requires at least: 3.0
Stable tag: 1.0.0

This plugin retrieves the permalink URL for a page or post based on the ID with the shortcode [permalink].

== Description ==

This plugin retrieves the permalink URL for a page or post based on the ID with the shortcode [permalink]. 

= What's the point of this plugin? =

In creating my own sites with WordPress, I started noticing that I like to link to articles within other articles. Then I'm always changing my mind about stuff, messing around with page/post slugs, and screwing with my permalinks. It's very annoying to then have to go back and change links wherever I placed them.

This plugin is about as simple as it gets; it's literally three lines of code. It just retrieves the URL of a page or post based on WordPress's unique, numerical ID for it, which never changes. For me personally, using the [permalink] shortcode every time I link to another page or post within my site makes life easier because I don't have to worry about the URL changing. Also, when I move my site from my local dev server to the live web server, I don't have to worry about any of these links.

Anyways, I thought what the heck, why not share? -- I keep pasting this code snippet in all my personal website themes anyway. 

However, keep in mind this plugin will be more useful for people like me who are always working under the HTML tab when editing pages and posts. If you're looking for a similar shortcode that constructs the entire HTML link for you, check out [this plugin](http://justintadlock.com/archives/2008/09/19/get-permalink-wordpress-plugin "Get Permalink Plugin") by Justin Tadlock.

= Usage Examples =

Since all this plugin does is retrieve the URL to the post or page, you need to format a standard HTML link in whatever way you normally would. Then, instead manually writing in the post or page's URL, you retrieve it with the [permalink] shortcode. Inside, you reference the WordPress's numeric ID for the post or page.

`<a href="[permalink id="123"]">Your Text</a>`

`<a href="[permalink id="123"]" title="Your Link Title">Your Text</a>`

`<a href="[permalink id="123"]#some_section_of_page">Your Text</a>`

== Installation ==

1. Upload `theme-blvd-simple-permalink` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Retrieve the URL to a page or post with its respective numeric ID like this: `[permalink id="123"]`

== Changelog ==

= 1.0.0 =

* This is the first release.