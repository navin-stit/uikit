<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
	{
	parent::__construct();
	
	$this->load->model('Userss');
	}
        public function dispdata()
	{
        $this->load->view('layouts/layout-top');
	$result['data']=$this->Userss->showdata();
        //print_r($result);exit;
	$this->load->view('users/view',$result);
        $this->load->view('layouts/layout-bottom');
	}
    
    public function insert(){
        $this->load->view('users/add');
    }

    //////////////////////////////////
}
