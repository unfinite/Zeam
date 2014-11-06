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

