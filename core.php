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

*/

class Zeam {

	public $prefix = "<b>ZeamEngine:</b>&nbsp;";
	private $db;
	private $host;
	private $user;
	private $password;
	protected $logging;

	public function __construct($db, $host, $user, $password, $logging = false) {


		$this->db = $db;
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->logging = $logging;


		if ($this->logging) {
			error_reporting(E_ALL);
			$this->log('Object created. Everything /seems/ fine. Logging is on. Setting Zeam logging on will also set PHP\'s native error reporting into E_ALL mode. Make sure the variables are correct! Please run the start() method of the class now.');
		}
		else {
			error_reporting(0);
		}

	}

	public function start() {

		global $mysqli;
		$mysqli = new mysqli($this->host, $this->user, $this->password, $this->db);

		if ($mysqli->connect_errno) {
    	$this->log('Could not establish a connection with the database. Please check your variables. For detailed information, refer to PHP error reporting.');
    }
    else {
    	$this->log('Connection established.');
    }

  }

	public function hash($type, $content) {
		switch ($type) {
			case hash_types::MD5:
				return md5($content);
			break;
			case hash_types::SHA1:
				return sha1($content);
			break;
			case hash_types::CRYPT:
				return crypt($content);
			break;
			default:
				// We should probably use a custom Exception class in the future but this'll work for now.
				throw new Exception("Unknown hash type.");
		}
	}

	private function log($message) {
		if(!$this->logging) return false;
		echo $this->prefix;
		echo '<em>' . $message . '</em>';
		echo '<br />';
	}

}

class hash_types {
	const MD5 = 0;
	const SHA1 = 1;
	const CRYPT = 2;
}

/* End of file: core.php */