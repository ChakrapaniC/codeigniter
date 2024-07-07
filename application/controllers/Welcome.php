<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    public $db;
    public $session;
    public $failover;
    public $CityModel;

    public function __construct() {
        parent::__construct();
        $this->load->model('CityModel'); // Load the model
        // $this->CityModel = $this->CityModel; // Assign the model to a property
        $this->load->helper('url'); // Load URL helper
        $this->load->helper('form'); // Load form helper
        $this->load->library('session'); // Load session library
    }

    public function index() {
        // Load the form view
        $this->load->view('main');
    }

    public function getCityData() {
        // Get the selected city from the form
        $city = $this->input->post('city');
      
        // Fetch data from the model based on the selected city
        $data['city_data'] = $this->CityModel->getDataByCity($city);

        // Store the data in session
        $this->session->set_userdata('city_data', $data['city_data']);
        $this->session->set_userdata('city', $city);

        // Redirect to the result page
        redirect('Welcome/result');
    }

    public function result() {
        // Get the data from session
        $data['city_data'] = $this->session->userdata('city_data');
        $data['city'] = $this->session->userdata('city');

        // Load the result view
        $this->load->view('result', $data);
    }
}