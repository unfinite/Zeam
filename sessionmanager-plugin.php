<?php

/*



 ________  _______   ________  _____ ______      
|\_____  \|\  ___ \ |\   __  \|\   _ \  _   \    
 \|___/  /\ \   __/|\ \  \|\  \ \  \\\__\ \  \   
     /  / /\ \  \_|/_\ \   __  \ \  \\|__| \  \  
    /  /_/__\ \  \_|\ \ \  \ \  \ \  \    \ \  \ 
   |\________\ \_______\ \__\ \__\ \__\    \ \__\
    \|_______|\|_______|\|__|\|__|\|__|     \|__|
                                                 
                                                 
                                                 
Copyright 2014 Alphasquare.us
Licensed with the MIT license
http://github.com/Alphasquare/Zeam
http://alphasquare.us/code

You can remove this, but we'd love you to death if you kept this here. 
Also, we'd marry you if you put a link back to Alphasquare.us.

This is a class made to test the extensibility and features of the engine. Soon it'll be fully integrated with the Zeam class.


*/


class SessionManager {

	public $prefix = "<b>ZeamEngine:</b>&nbsp;";
	protected $logging;

	function __construct($logging = false) {
		$this->logging = $logging;
	}

	function start_session($id = ""){
		session_start($id);

		if ($this->logging) {
			echo ''.$this->prefix.'<i>Session created.</i><br>';
		}

	}

	function unset_session() {
		session_destroy();
		if ($this->logging) {
			echo ''.$this->prefix.'<i>Session destroyed.</i><br>';
		}

	}
}

?>
