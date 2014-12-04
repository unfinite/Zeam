<?php

/**
 * Starting point for everything Zeam.
 */
class ZeamCore {

	public $version;
	public $configs;
	public $app;

	function init() {

		// framework includes and essentials

	}

	public function setSettings($array) {

		if (isset($array['ZEAM_BASEPATH']) && isset($array['ZEAM_COREPATH']) && isset($array['ZEAM_MODULEPATH'])) {		

			$this->configs = $array;  // Store configs array in ZeamCore

			foreach ($array as $k => $v) {

				define($k, $v);

			}

		} else {

			throw new Exception("One essential value is not defined. Please check the settings array.");
		}

	}
	
}

?>
