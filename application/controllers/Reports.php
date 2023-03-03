<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
  
    public function index(){
	$this->load->view('reports/v_data_soal');
      }
      public function soal(){
	$this->load->view('reports/v_data_reports');
      }
      public function peserta(){
	$this->load->view('reports/v_data_peserta_tes');
      }

      public function jurusan(){
         $this->load->view('reports/v_data_reports_jurusan');
            }

}
