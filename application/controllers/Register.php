<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    public function __construct(){
        parent::__construct();
        // $this->load->model('Login_model');
      }
    
      public function index(){
        //   $this->redirectIfAuthenticated('logged_in');
          $this->view('auth.register.index');
      }
    
      public function process(){
        
      }
    
      public function cekDb($password){
            
      }
    
      public function logoutProcess() {
       
    }

}

/* End of file Controllername.php */
?>