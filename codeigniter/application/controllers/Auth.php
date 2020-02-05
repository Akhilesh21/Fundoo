<?php
class Auth extends CI_Controller
{
    public function login()
    {

        $this->load->view('login');
        //echo '  login page';
    }

    public function register()
    {
        $this->load->view('register');
    }
    public function registerdata()
    {
        $user = 'root';
        $db = 'Sample';
        $pwd = 'Admin@1234';
        $host = 'localhost';
   