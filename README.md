![Zeam](http://alphasquare.us/code/logo.png)
Say hello to Zeam.
===============

Zeam is a concept PHP engine made to be extensible, ultra-fast, and awesome. Building apps with PHP just got faster, and easier. It also gets ultra-fast support, and updates. Licensed with the MIT license.

Currently it's on a concept stage, but there's more coming, including modular components and possibly a controller->view architecture.

Social
===============

We got an IRC! Just go to irc.freenode.net and join the channel ``zeam-engine``.

Warning
===============

Things in the ``experimental`` branch are extremely unstable. Not for production. Please use files from ``master`` branch instead.

Setup
===============

To set it up, just download the source (``core.php``) and place it anywhere, preferably the root.
Create a folder on your server called modules, and another one called Zeam.
Then, you can develop and extend it. 

Extend
===============

To not mess up your source, try not to develop there. Instead, just include it into another file, and extend the classes from there. That way your source won't be so messy and it'll be easier to develop. 

A plugin system is coming soon. Some proposed plugins are: plug&play Admin panel, etc.

Documentation
===============

To use, simply include the file universal.php in the PHP file you want to initialize it in. Maybe even in each page.


To start, initialize the class. The last parameter is to enable logging. Set it to no for production environments.

  ``$ZeamEngine = New Zeam("db", "host", "user", "password", true);``

Then, simply call the start() method.

  ``$ZeamEngine->start();``

It will connect to the database, return the mysqli variable.

Extras
======

To use the optional SessionManager, 


	// Create the Object. The parameter is to enable logging. Set it to no for production environments.
	$SessionManager = New SessionManager(true);
	// Use whichever method you like.
	$SessionManager->start_session();


Even more awesomeness
=====================

Visit Alphasquare.us for more info.
