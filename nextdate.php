<?php
/*
Plugin Name: Next Date
Plugin URI: http://asandia.com/wordpress-plugins/nextdate/
Description: Display the next upcoming date in a list of dates
Version: 1.0
Author: Jeremy Shapiro
Author URI: http://www.asandia.com/
*/

/*
Next Date (WordPress Plugin)
Copyright (c) 2013-2023 Jeremy Shapiro
*/

// Tell WordPress to register the shortcode
add_shortcode("nextdate", "nextdate_print");

function nextdate_print($atts, $content) {
    $atts = shortcode_atts(array(
        'dates'		=> '',
        'format'	=> 'F j, Y',
        'default'   => '',
    ), $atts);

    foreach(explode(',', $atts['dates']) as $date)
    {
        // Is this a valid date and is it in the future?
        if(($goodDate = strtotime($date))
            && ($goodDate > time())
        ) {
            return date($atts['format'], $goodDate);
        }
    }

    // Couldn't find a valid date? Return the default value
    return $atts['default'];
}