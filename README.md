# jetpack_widget_social_media
**What is This**
A project to help Wordpress / Jetpack user customize the social media icons shown and their order in the sidebar.

**Problems this code solves for Wordpress Jetpack users**
These are areas in which Jetpack has dropped the ball in a major way for so many years:
- Add LinkedIn icon to link to a LinkedIn company account (instead of a LinkedIn user profile)
- Re-order social icons
- Add multiple social icons belonging to the same platform

**Who's This For**
- People that want to order the social icons but haven't been able to
- People that want to increment options not provided with Jetpack's widget
- People that want LinkedIn icon to link to LinkedIn company profile
- People that want to link to multiple URLs on the same social platform

**The Solution**
This is code that could be applied to functions.php file in virtually any Wordpress theme out there.
It is modular: you choose which lines you need to add to make it work for you, custom. Just follow the **Instructions** below.

**Instructions - How to Customize this Code**
1. Choose which social icons you want to showcase
Standard (configured on Jetpack widget): ____ , ____ , ____  
Other options (available on Jetpack's Genericons): ____ , ____ , ____ 
Your options (write down): _n options_

2. Determine the order in which you want the icons to appear on the widget / sidebar
Standard (as ordered by on Jetpack widget):  ____ , ____ , ____ 
Your options (ordered): order the _n options_ your wrote down in #1 as you'd like them to show on your widget / sidebar

3. On Jetpack's Widget / Sidebar config screen, ensure that the URL for each of the options you chose is empty otherwise the icons will show multiple times, and the order might be affected

4. Repeat these following steps _for each platform you want to showcase_:
A. Copy the template code and past on your theme's functions.php file 
B. Change the name of the function to reflect the first / second / ... / _n-th_ option you ordered
C. Change the URL destination matching that platform
D. Change the genericon descriptor to pull the right social media icon
E. Change the order in which each element will appear
F. Save the file and refresh the post URL in which the buttons show to verify the changes
G. Code didn't work? Tweak A-E as applicable until website reflects the final state you described in step #2

_will add details, references and links to each step shortly_

5. Repeat step #4 _n_ times (= number of social media platforms you want to show)

**Coming soon - stay tuned**
- How to resize social icons
- How to create your own custom icons, or add the icons that Jetpack failed to add on Genericons like: Medium, Apple Podcasts, Google Podcast, and others 

**Want to provide feedback or contribute?**
Leave a comment! Thanks for reading and using this.
