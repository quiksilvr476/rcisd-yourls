<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.


// GENERAL

// Site URL
define('siteURL', 'http://rcurl.org');

// Page title for your site
define('title', 'RCISD URL Shortener'); 

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', 'RCISD Short URL');

// A description of your site, shown on the homepage.
define('description', 'Provides a custom URL shortening service for RCISD staff '); 

// The favicon for your site
define('favicon', '/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/assets/img/logo-black.png');


// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "District Website" => "https://www.rcisd.org/",
    "Documentation" => "https://rcisd.freshservice.com/support/solutions",
    "Support" => "https://rcisd.freshservice.com/support/tickets/new",
];

?>
