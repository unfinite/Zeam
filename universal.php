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

*/

class Universal {

	public $prefix = "<b>UniversalEngine:</b>&nbsp;";
	private $db;
	private $host;
	private $user;
	private $password;
	protected $logging;

	function __construct($db, $host, $user, $password, $logging = "no") {


		$this->db = $db;
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->logging = $logging;


		if ($this->logging == "yes") {
			error_reporting(E_ALL);
			echo ''.$this->prefix.'<i>Object created. Everything /seems/ fine. Logging is on. Setting UnivEng logging on will also set PHP\'s native error reporting into E_ALL mode. Make sure the variables are correct! Please run the start() method of the class now. </i><br>';
		} else {
			error_reporting(0);
		}

	}

	function start() {

		$mysqli = new mysqli($this->host, $this->user, $this->password, $this->db);

		if (mysqli_connect_errno()) {
    		echo ''.$this->prefix.' <i>Could not establish a connection with the database. Please check your variables. For detailed information, refer to PHP error reporting.</i><br>';
    	} else {
    		if ($this->logging == "yes") {
			echo ''.$this->prefix.'<i>Connection established.</i><br>';
		}
		return $mysqli;
    	}

	}

}


// OPTIONAL. 

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
// OPTIONAL. 




// Example Usage
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
