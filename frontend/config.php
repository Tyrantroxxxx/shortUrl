<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL

// Site URL (no trailing slash)
define('siteURL', 'http://zhujingyu.com/shorturl');

// Page title for your site
define('title', 'zhujingyu'); 

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', 'zhujingyu.com');

// A description of your site, shown on the homepage.
define('description', 'Free short link service from: http://zhujingyu.com/shorturl'); 

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo.png');

// Enables the custom URL field
// true or false
define('enableCustomURL', true);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange

//define('colour', '#007bff');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
define('backgroundImage', 'https://source.unsplash.com/featured/?wallpapers');

// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "Server by zhujingyu"   =>  "http://zhujingyu.com/"
];

?>
