UniversalEngine
===============

Universal is a concept PHP engine made to be extensible, ultra-fast, and awesome. Building apps with PHP just got faster, and easier. It also gets ultra-fast support, and updates. Licensed with the MIT license.

How to use/Docs
===============

To use, simply include the file universal.php in the PHP file you want to initialize it in. Maybe even in each page.


To start, initialize the class. The last parameter is to enable logging. Set it to no for production environments.

  ``$UniversalEngine = New Universal("db", "host", "user", "password", "yes");``

Then, simply call the start() method.

  ``$UniversalEngine->start();``

It will connect to the database, return the mysqli variable.

Extra
=====

To use the optional SessionManager, 


	// Create the Object. The parameter is to enable logging. Set it to no for production environments.
	$SessionManager = New SessionManager("yes");
	// Use whichever method you like.
	$SessionManager->start_session();


