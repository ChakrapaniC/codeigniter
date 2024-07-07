<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singlepage extends CI_Controller  {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public $benchmark;
    public $hooks;
    public $config;
    public $log;
    public $utf8;
    public $uri;
    public $router;
    public $exceptions;
    public $output;
    public $security;
    public $input;
    public $lang;

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
    }

	public function bangaloreCity() {
        $this->load->view('bangalore/singlePg');
    }

    public function gurugramCity() {
        $this->load->view('gurugram/singlePg');
    }

    public function delhiCity() {
        $this->load->view('delhi/singlePg');
    }

    public function mumbaiCity() {
        $this->load->view('mumbai/singlePg');
    }

    public function puneCity() {
        $this->load->view('pune/singlePg');
    }

    public function ahmedabadCity() {
        $this->load->view('ahmedabad/singlePg');
    }

    public function hyderabadCity() {
        $this->load->view('hyderabad/singlePg');
    }

    public function noidaCity() {
        $this->load->view('noida/singlePg');
    }

    public function recent() {
        $this->load->view('recent/singlePg');
    }

    public function about() {
        $this->load->view('about/singlePg');
    }
    

  
}