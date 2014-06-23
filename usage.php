<?php


/*

Docs: Usage
Refer to readme.md for more information

*/

// Create the Object, input database details. The last parameter is to enable logging. Set it to no for production environments.
$UniversalEngine = New Universal("db", "host", "user", "password", "yes");
// Execute the start method.
$UniversalEngine->start();

/*

OPTIONAL FUNCTIONALITY: SessionManager

*/

// Create the Object. The last parameter is to enable logging. Set it to no for production environments.
$SessionManager = New SessionManager("yes");
// Use whichever method you like.
$SessionManager->start_session();

?>
