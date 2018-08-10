# jetpack_widget_social_media

A project to help Wordpress / Jetpack user customize the social media icons shown and their order in the sidebar.

## Problems this code solves for Wordpress Jetpack users
These are areas in which Jetpack has dropped the ball in a major way for so many years:
* Add LinkedIn icon to link to a LinkedIn company account (instead of a LinkedIn user profile)
* Re-order social icons
* Add multiple social icons belonging to the same platform

## Who's This For
* People that want to order the social icons but haven't been able to
* People that want to increment options not provided with Jetpack's widget
* People that want LinkedIn icon to link to LinkedIn company profile
* People that want to link to multiple URLs on the same social platform

## The Solution
This is code to apply to functions.php file in virtually any Wordpress theme out there.
It is modular: you choose which lines you need to add to make it work for you, custom. Just follow the **Instructions** below.

## Instructions - How to Customize this Code
1. Choose which social icons you want to showcase
Standard (configured on Jetpack widget): Facebook, Twitter, Instagram, Pinterest, LinkedIn, GitHub, YouTube, Vimeo, Wordpress.org, Flickr, Google+ (per reference [2])
All options (available on Jetpack's Genericons): refer to the list of files on reference [5] 
Write down your options, in order (_n options_)

1. Determine the order in which you want the icons to appear on the widget / sidebar
Standard order (per Jetpack widget): Facebook, Twitter, Instagram, Pinterest, LinkedIn (profiles only), Github, YouTube, Vimeo, Wordpress.org, Flickr, Google+ (per reference [2])
Your options (ordered): order the _n options_ your wrote down in #1 as you'd like them to show on your widget / sidebar

1. On Jetpack's Widget / Sidebar config screen (reference [6]), ensure that the URL for each of the platforms you chose is empty otherwise the icons will show multiple times, and the order might be affected

1. Repeat these following steps _for each platform you want to showcase_:
_will add details, references and links to each step shortly_
    1. Copy the template code and paste on the bottom of your theme's functions.php file (link on reference [7]) 
    1. Change the name of the function to reflect the first / second / ... / _n-th_ option you ordered
    1. Change the URL destination matching that platform (in sample code, URLs containing to _acme_)
    1. Change the genericon descriptor to pull the right social media icon (they tend to follow this pattern: class="genericon genericon-_platform_"
    1. Change the order in which each element will appear (in sample code, numbers 13, 23, 33, etc)
    1. Save the file and test the code (F5 refresh the URL in which the icons show to verify the changes you made)
    1. Code didn't work? Tweak steps A-E above as applicable until website reflects the final state you described in step #2

1. Repeat step #4 _n_ times (= number of social media platforms you want to show)

## Sample Code ##
This code activates the following platforms in order:
1. Instagram
1. LinkedIn Company (increment to Jetpack, which only provides support to LinkedIn profiles)
1. YouTube
1. Pinterest, with an alternate icon
1. RSS Feed

```
/* Courtesy of Andre Piazza 2018 */
/* Code customizes Jetpack for the following social networks:  */
/* Instagram, LinkedIn (Company), Youtube, Pinterest (alternate icon), RSS feed  */
/* Important: remember to clear on Jetpack Widget configurator the URLs of the platforms you'll re-order */
/* otherwise the items will show multiple times and the order will be affected */

/* Order Instagram as first icon  */
function jetpackme_instagram_icon( $html_array ) {
    return
        $html_array +
        array(
            13 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://instagram.com/acme" '
                . 'class="genericon genericon-instagram" target="_blank">'
                . '<span class="screen-reader-text">Acme on Instagram</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_instagram_icon' );

/* Add LinkedIn as the third icon, links to LinkedIn Company URL */
function jetpackme_linkedin_company_icon( $html_array ) {
    return
        $html_array +
        array(
            23 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://www.linkedin.com/company/acme" '
                . 'class="genericon genericon-linkedin" target="_blank">'
                . '<span class="screen-reader-text">Acme on LinkedIn</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_linkedin_company_icon' );

/* Order YouTube as fifth icon  */
function jetpackme_youtube_icon( $html_array ) {
    return
        $html_array +
        array(
            33 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://www.youtube.com/channel/acme" '
                . 'class="genericon genericon-youtube" target="_blank">'
                . '<span class="screen-reader-text">Acme on Youtube</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_youtube_icon' );

/* Add Pinterest Alternate icon  */
function jetpackme_pinterest_alt_icon( $html_array ) {
    return
        $html_array +
        array(
            43 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://pinterest.com/acme" '
                . 'class="genericon genericon-pinterest-alt" target="_blank">'
/* if you prefer the regular Pinterest icon instead, delete "-alt" for the line above */                  
                . '<span class="screen-reader-text">Acme on Pinterest</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_pinterest_alt_icon' );

/* Add RSS Feed icon as the last */
function jetpackme_feed_icon( $html_array ) {
    return
        $html_array +
        array(
            83 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://acme.com/feed.xml" '
                . 'class="genericon genericon-feed" target="_blank">'
                . '<span class="screen-reader-text">Acme's Feed</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_feed_icon' );
```

## References
1. [Github page for Genericons](https://github.com/Automattic/Genericons) (latest commit Nov 2016)
1. [Jetpack's documentation on Social Icons](https://jetpack.com/jetpack_support_tag/social-media/) _talk about being outdated: dates back to 2015. In social media terms, that's the equivalent of the Middle Age_
1. [Which Social Media Icon Sets are the Best for Wordpress](https://itxdesign.com/which-social-media-icon-sets-are-the-best-for-wordpress/) > an overview of font and implementation options
1. [Want to play with all the Genericons available options on your computer?](https://github.com/Automattic/Genericons/tree/master/genericons) > Download the Genericons.ttf file from here
1. [All Genericons currently available](https://github.com/Automattic/Genericons/tree/master/source/svg)
1. Jetpack's Widget / Sidebar config: replace "yourdomain" on this URL https://yourdomain.com/wp-admin/widgets.php
1. Edit functions.php file: replace "yourdomain" and "yourtheme" with the proper names on this URL https://yourdomain.com/wp-admin/theme-editor.php?file=functions.php&theme=yourtheme

## Coming soon - stay tuned
* How to resize social icons
* How to create your own custom icons, or add the icons that Jetpack failed to add on Genericons like: Medium, Apple Podcasts, Google Podcast, and others 

## Want to provide feedback or contribute?
Leave a comment! Thanks for reading and using this.
