<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller  {

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
        $this->load->view('bangalore/city');
    }

    public function gurugramCity() {
        $this->load->view('gurugram/gurugram');
    }

    public function delhiCity() {
        $this->load->view('delhi/delhi');
    }

    public function mumbaiCity() {
        $this->load->view('mumbai/mumbai');
    }

    public function puneCity() {
        $this->load->view('pune/pune');
    }

    public function ahmedabadCity() {
        $this->load->view('ahmedabad/ahmedabad');
    }

    public function hyderabadCity() {
        $this->load->view('hyderabad/hyderabad');
    }

    public function noidaCity() {
        $this->load->view('noida/noida');
    }

    public function recent() {
        $this->load->view('recent/recent');
    }

    public function about() {
        $this->load->view('about/about');
    }
    

  
}