<?php
// Shortcodes
add_shortcode('heading', 'heading_shortcode'); // You can place [heading] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode for blog post subheadings

function heading_shortcode($atts, $content = null)
{
        return '<h3 style="color: ' . $atts['color'] . '">' .  do_shortcode($content) . '</h3>'; // do_shortcode allows for nested Shortcodes
}
