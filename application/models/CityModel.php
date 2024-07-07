<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDataByCity($city) {
       
        $query = $this->db->from($city)->get(); // Ensure $this->db is not null
        
        return $query->result_array();
    }
}