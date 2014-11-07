<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct(){
        parent::__construct();


        if (!$this->ion_auth->logged_in())
		{
            redirect(base_url());
		}
    }

	public function index()
	{
        $data = array(
            'datos' =>  ''
        );
		$this->load->view('dashboard_view', $data);
    }

    /************LOGOUT FUNCTION***********/
    public function logout(){
        $this->ion_auth->logout();
        redirect(base_url());
    }
}
