=== Force Refresh ===
Stable tag: 2.6.0
Contributors: jordanleven
Tags: refresh, reload, single page application
Requires PHP: 7.4
Requires at least: 5.2
Tested up to: 5.9
License: GPLv2 or later
Force Refresh is a simple plugin that allows you to force a page refresh for users currently visiting your site. Additionally, you may force refreshes on a per-page or post basis.


== Description ==
Force Refresh is the best plugin for requesting browsers to refresh their page. Perfect for single-page applications or pages that bring in feeds, this simple plugin will allow you to force a page refresh for users currently visiting any page of your site.

== Features ==
- Support for both parent and child themes.
- Allows an admin to simply click a button to request browsers to refresh their page. This is done within between 30 seconds and two minutes after making the request.
- Ability to add refreshing capabilities to any role using the "Invoke Force Refresh" capability.
- Ability to refresh on a per-page or post basis.
- Customizable client-side refresh intervals.

== Feature Requests and Bug Reports ==
- Please report any bugs you encounter [under the Support tab](https://wordpress.org/support/plugin/force-refresh).
- Feature requests can be made [on GitHub](https://github.com/jordanleven/force-refresh/issues). Force Refresh is an open-source plugin, and PRs are welcomed!

== Installation ==
Upload the Force Refresh plugin to your site, and then simply activate it. To force a refresh, just navigate to "Tools", click on "Force Refresh" and click the button that says, "Refresh Site."

== Screenshots ==
1. Under Tools, you can click "Refresh Site"
2. After clicking the button, you'll receive confirmation that you've requested connected browsers to refresh.
3. To refresh a single page or post, locate the "Force Refresh" section under any page.

== Changelog ==
= 2.6.0 =
*Released on June 11, 2022*

* Add troubleshooting page link to admin page 
* Update directions for sites with no name 

= 2.5.2 =
*Released on January 23, 2022*

* Address issue with production build 

= 2.5.1 =
*Released on January 23, 2022*

* Update Heath troubleshooting section 
* Update WordPress version requirements 

= 2.5.0 =
*Released on January 8, 2022*

* Alert user when plugin is outdated 

= 2.4.0 =
*Released on December 4, 2021*

* Add additional debug logs 
* Add support for troubleshooting screen 
* Exit force refresh if success is false 
* Remove nonce for client-side calls 

= 2.3.0 =
*Released on March 7, 2021*

* Address issue with default refresh intervals 
* Update button text in Admin Bar 

= 2.2.0 =
*Released on November 29, 2020*

* Add support for WordPress 5.5.3 
* Update Admin UI to use Vue instead of Handlebars 
* Address issue with encoded post names 

= 2.1.6 =
*Released on September 29, 2020*

* Issue with refresh interval being ignored 

= 2.1.5 =
*Released on September 17, 2020*

* Address issue running plugin in PHP 7.2 

= 2.1.4 =
*Released on September 16, 2020*

* Address refresh loop bug when activating 
* Issue displaying default refresh intervals 

= 2.1.3 =
*Released on September 16, 2020*

* Address refresh permissions issue 

= 2.1.2 =
*Released on September 7, 2020*

* Performance enhancements and bug fixes

= 2.1.1 =
*Released on September 7, 2020*

* Performance enhancements and bug fixes

= 2.1.0 =
*Released on October 19, 2018*

* Add support to request refreshes on custom post types

= 2.0.0 =
*Released on October 11, 2018*

* Move from Xamin to LightnCandy for HTML templates
* Performance enhancements and bug fixes

= 1.1.2 =
*Released on February 28, 2018*

* Update dependencies

= 1.1.1 =
*Released on February 28, 2018*

* Bug fixes

= 1.0.0 =
*Released on October 5, 2017*

* Initial release