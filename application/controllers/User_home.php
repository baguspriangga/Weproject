<?php  defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_home extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
 
	public function index()
	{
	  	$this->template->load('user_home/border_home', 'user_home/get_home');
	}	
		
 
}
?>