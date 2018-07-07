# jetpack_widget_social_media

# What is This <h2>
A project to help Wordpress / Jetpack user customize the social media icons shown and their order in the sidebar.

# Problems this code solves for Wordpress Jetpack users  <h2>
These are areas in which Jetpack has dropped the ball in a major way for so many years:
* Add LinkedIn icon to link to a LinkedIn company account (instead of a LinkedIn user profile)
* Re-order social icons
* Add multiple social icons belonging to the same platform

# Who's This For  <h2>
* People that want to order the social icons but haven't been able to
* People that want to increment options not provided with Jetpack's widget
* People that want LinkedIn icon to link to LinkedIn company profile
* People that want to link to multiple URLs on the same social platform

# The Solution  <h2>
This is code to apply to functions.php file in virtually any Wordpress theme out there.
It is modular: you choose which lines you need to add to make it work for you, custom. Just follow the **Instructions** below.

# Instructions - How to Customize this Code  <h2>
1. Choose which social icons you want to showcase
Standard (configured on Jetpack widget): Facebook, Twitter, Instagram, Pinterest, LinkedIn, GitHub, YouTube, Vimeo, Wordpress.org, Flickr, Google+ (per reference [2])
All options (available on Jetpack's Genericons): refer to the list of files on reference [5] 
Write down your options, in order (_n options_)

1. Determine the order in which you want the icons to appear on the widget / sidebar
Standard order (per Jetpack widget): Facebook, Twitter, Instagram, Pinterest, LinkedIn (profiles only), Github, YouTube, Vimeo, Wordpress.org, Flickr, Google+ (per reference [2])
Your options (ordered): order the _n options_ your wrote down in #1 as you'd like them to show on your widget / sidebar

1. On Jetpack's Widget / Sidebar config screen (reference [6]), ensure that the URL for each of the options you chose is empty otherwise the icons will show multiple times, and the order might be affected

1. Repeat these following steps _for each platform you want to showcase_:
_will add details, references and links to each step shortly_
    1. Copy the template code and paste on the bottom of your theme's functions.php file (link on reference [7]) 
    1. Change the name of the function to reflect the first / second / ... / _n-th_ option you ordered
    1. Change the URL destination matching that platform
    1. Change the genericon descriptor to pull the right social media icon
    1. Change the order in which each element will appear
    1. Save the file and refresh the post URL in which the buttons show to verify the changes
    1. Code didn't work? Tweak A-E as applicable until website reflects the final state you described in step #2

1. Repeat step #4 _n_ times (= number of social media platforms you want to show)

# References  <h2>
1. Github page for Genericons: https://github.com/Automattic/Genericons [_latest commit Nov 2016_]
1. Jetpack's documentation on Social Icons: https://jetpack.com/jetpack_support_tag/social-media/ (_talk about being outdated: dates back to 2015. In social media terms, that's the equivalent of the Middle Age_)
1. Which Social Media Icon Sets are the Best for Wordpress: https://itxdesign.com/which-social-media-icon-sets-are-the-best-for-wordpress/ > a review of options
1. Want to play with all the Genericons available options on your computer? Download the Genericons.ttf file from here: https://github.com/Automattic/Genericons/tree/master/genericons
1. All Genericons currently available: https://github.com/Automattic/Genericons/tree/master/source/svg
1. Jetpack's Widget / Sidebar config: replace "yourdomain" on this URL: https://yourdomain.com/wp-admin/widgets.php
1. Edit functions.php file: replace "yourdomain" and "yourtheme" with the proper names on this URL https://yourdomain.com/wp-admin/theme-editor.php?file=functions.php&theme=yourtheme

# Coming soon - stay tuned  <h2>
* How to resize social icons
* How to create your own custom icons, or add the icons that Jetpack failed to add on Genericons like: Medium, Apple Podcasts, Google Podcast, and others 

# Want to provide feedback or contribute?  <h1>
Leave a comment! Thanks for reading and using this.
