<?php

////	Puff Core Settings
//
// The root URL of your site (with trailing slash)
$Sitewide['Settings']['Site Root']                      = 'https://devede.org/';
// A title for your site.
$Sitewide['Settings']['Site Title']                     = 'DeVeDe';
// Something much longer or much shorter.
$Sitewide['Settings']['Alternative Site Title']         = 'DeVeDe - a free, open-source Video to DVD converter.';
// Stripping the .php from URLs requires server-side configuration.
// Check it works before enabling it.
$Sitewide['Settings']['Strip PHP from URLs']            = true;
// Stop the loading of asset from external domains.
$Sitewide['Settings']['Content Security Policy Header'] = false;
// Honor Do Not Track Headers
$Sitewide['Settings']['Honor DNT Headers']              = true;
// Change to your tracking id like 'UA-1234567-89' for tracking.
$Sitewide['Settings']['Google Analytics']               = 'UA-45667989-9';
// Use a secure connection in future if it's available.
$Sitewide['Settings']['Try to Secure']                  = true;
// Load all the functions to be ready.
$Sitewide['Settings']['AutoLoad']['Functions']          = true;

// Some social settings for your site.
$Sitewide['Social']['Facebook'] = 'https://www.facebook.com/eustasy';
$Sitewide['Social']['Google+']  = 'https://plus.google.com/eustasy';
$Sitewide['Social']['Twitter']  = 'https://twitter.com/eustasy';

// Default Page Settings
$Sitewide['Page']['Title']          = 'DeVeDe';
$Sitewide['Page']['Author']         = 'eustasy';
$Sitewide['Page']['Description']    = 'DeVeDe is a free, open-source Video to DVD converter. It will transform various formats of video to a DVD Player playable video DVD, VideoCD, Super VideoCD, China VideoDisc, or DivX/MPEG-4 compliant image which it will then offer to start burning to any writable disc type. You can download DeVeDe for free and start converting AVI, MP4 and MPG to DVD now, no watermarks, no premium version.';
$Sitewide['Page']['Tagline']        = 'DeVeDe - a free, open-source Video to DVD converter.';
$Sitewide['Page']['Image']          = '';
$Sitewide['Page']['Published']      = '';
$Sitewide['Page']['Theme Color']    = '#3892E0';
$Sitewide['Page']['Author Name']    = 'eustasy';
$Sitewide['Page']['Google+ Author'] = $Sitewide['Social']['Google+'];
$Sitewide['Page']['Twitter Author'] = $Sitewide['Social']['Twitter'];
$Sitewide['Page']['Twitter Site']   = $Sitewide['Social']['Twitter'];

// Version
$Sitewide['Version']['Core'] = '0.4';
