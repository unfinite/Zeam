<?php

/*

 _   _       _                          _ _____            _            
| | | |     (_)                        | |  ___|          (_)           
| | | |_ __  ___   _____ _ __ ___  __ _| | |__ _ __   __ _ _ _ __   ___ 
| | | | '_ \| \ \ / / _ \ '__/ __|/ _` | |  __| '_ \ / _` | | '_ \ / _ \
| |_| | | | | |\ V /  __/ |  \__ \ (_| | | |__| | | | (_| | | | | |  __/
 \___/|_| |_|_| \_/ \___|_|  |___/\__,_|_\____/_| |_|\__, |_|_| |_|\___|
                                                      __/ |             
                                                     |___/              
Copyright 2014 Alphasquare.us
Licensed with the MIT license
http://github.com/Alphasquare/UniversalEngine
http://alphasquare.us/universal

You can remove this, but we'd love you to death if you kept this here. 
Also, we'd marry you if you put a link back to Alphasquare.us.

This is a class made to test the extensibility and features of the engine. Soon it'll be fully integrated with the Universal class.


*/


class SessionManager {

	public $prefix = "<b>UniversalEngine:</b>&nbsp;";
	protected $logging;

	function __construct($logging = "no") {
		$this->logging = $logging;
	}

	function start_session($id = ""){
		session_start($id);

		if ($this->logging == "yes") {
			echo ''.$this->prefix.'<i>Session created.</i><br>';
		}

	}

	function unset_session() {
		session_destroy();
		if ($this->logging == "yes") {
			echo ''.$this->prefix.'<i>Session destroyed.</i><br>';
		}

	}
}

?>
