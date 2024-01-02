<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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
    // public function index()
    // {
    //     $this->load->view('_partial/home');
    //     $this->load->view('home');
    //     $this->load->view('_partial/footer');
    // }
    // public function about()
    // {
    //     $this->load->view('_partial/home');
    //     $this->load->view('about');
    //     $this->load->view('_partial/footer');
    // }
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('login');
            redirect($url);
        };
    }
    public function index()
    {
        $this->load->view('view-home');
    }
    public function create()
    {
        $this->load->view('create');
    }
    public function list()
    {
        $this->load->view('list');
    }
    public function schedule()
    {
        $this->load->view('schedule');
    }
    public function midterm()
    {
        $this->load->view('midterm');
    }
    public function finalexam()
    {
        $this->load->view('finalexam');
    }
}
