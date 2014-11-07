<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        if ($this->ion_auth->logged_in()){
            redirect(base_url('admin'));
		}

        if(isset($_POST['entrar'])){

            $identity = $_POST['user'];
            $password = $_POST['pass'];;
            $remember = TRUE; // remember the user
            $check = $this->ion_auth->login($identity, $password, $remember);

            if($check){
                redirect(base_url('admin'));
            }else{
                $this->session->set_flashdata('error', 'Credenciales incorrectas');
                redirect(base_url());
            }
        }

        $data = array(
            'datos' =>  ''
        );
		$this->load->view('login_view', $data);
	}
}

