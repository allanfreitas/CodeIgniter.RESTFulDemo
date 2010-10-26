<?php

/**
*	@package		RESTful Demo
*	@subpackage		Libraries
*	@author			Ben Sekulowicz-Barclay
*	@copyright		Copyright 2009
*	@version		0.01
*
**/

class MY_Input extends CI_Input { 
	
	/**
	*	@access	public
	*	@param	string
	*	@param	boolean
	*	@return	string
	*	@author Ben Sekulowicz-Barclay
	*
	**/
	
	function delete($index = '', $xss_clean = FALSE) {
					
		if (strtoupper($this->server('REQUEST_METHOD')) != 'DELETE') {
			return FALSE;
		}
					
		parse_str(file_get_contents("php://input"), $_DELETE);	
		return $this->_fetch_from_array($_DELETE, $index, $xss_clean);
	}
	
	/**
	*	@access	public
	*	@param	string
	*	@param	boolean
	*	@return	string
	*	@author Ben Sekulowicz-Barclay
	*
	**/
	
	function put($index = '', $xss_clean = FALSE) {
		
		if (strtoupper($this->server('REQUEST_METHOD')) != 'PUT') {
			return FALSE;
		}
					
		parse_str(file_get_contents("php://input"), $_PUT);	
		return $this->_fetch_from_array($_PUT, $index, $xss_clean);
	}
}



/* End of file MY_Input.php */
/* Location: ./system/application/libraries/MY_Input.php */