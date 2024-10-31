=== Plugin Name ===
Contributors: jeremyshapiro
Tags: dates, nextdate, jeremy shapiro, times, dates, dynamic, events, meetings
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6FEVZ7NU86DNN
Requires at least: 2.0.2
Tested up to: 6.2
Stable tag: 1.0

This plugin allows you to display the next date from a list of dates with the [nextdate] shortcode.

== Description ==

Want to always have the next date from a list displayed on a page of your site? Nextdate picks the next upcoming date from your list and displays it in the format you like!

Perhaps you have a recurring monthly meeting or event and you want to always display the next date to keep the page current.

Use the `[nextdate]` shortcode with a list of dates to get the next date from the list.

The `dates` parameter is required and should include a comma separated list of valid dates in any format that [PHP will recognize](http://php.net/manual/en/function.strtotime.php), for example `5/15/2011, 2012-01-15, 21.9.2013, Tuesday, next Thursday`

You can also specify a `default` value like `[nextdate dates="5/15/1993, 7/19/2008" default="No upcoming party" /]` to display a default value when none of the dates are in the future.

You can optionally specify a [PHP friendly date format](http://php.net/manual/en/function.date.php), for example `[nextdate dates="next Thursday" format="l, F jS" /]` to format the date. By default, dates are returned back in the `F j, Y` format, i.e. `September 18, 2013`.

For an example of usage, see how the [Bay Area Mastermind](https://bayareamastermind.com/events/) lists their next upcoming event dates.

== Installation ==

To install the plugin, download it, upload to your WordPress site, activate and use the shortcode.

== Changelog ==

= Version 1.0 =
* 9/18/2013: Plugin Added
