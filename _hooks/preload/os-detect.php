<?php

if ( !empty($_SERVER['HTTP_USER_AGENT']) ) {

	$Sitewide['OS']['linux'] = strpos($_SERVER['HTTP_USER_AGENT'], 'Linux') ? true : false;
	$Sitewide['OS']['windows'] = strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') ? true : false;
	$Sitewide['OS']['osx'] = strpos($_SERVER['HTTP_USER_AGENT'], 'Macintosh') ? true : false;

	/*
	echo '<!-- ';
	if ( $Sitewide['OS']['linux'] ) {
		echo 'You are using Linux.';
	} else if ( $Sitewide['OS']['windows'] ) {
		echo 'You are using Windows.';
	} else if ( $Sitewide['OS']['osx'] ) {
		echo 'You are using OS X.';
	} else {
		echo 'You are using something else.';
	}
	echo ' -->';
	*/

} else {
	$Sitewide['OS']['linux'] = false;
	$Sitewide['OS']['windows'] = false;
	$Sitewide['OS']['osx'] = false;
}
