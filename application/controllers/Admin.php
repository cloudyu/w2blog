<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function index(){
        echo 'Hello World!';
    }
    public function login(){
        $this->load->view('admin/login');
    }
    public function register(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', '邮箱', 'required|valid_email');
        $this->form_validation->set_rules('name', '用户名', 'required');
        $this->form_validation->set_rules('passwd', '密码', 'required');
        $this->form_validation->set_rules('agree', '用户协议', 'required');

        if ($this->form_validation->run() == FALSE) {
            var_dump($_POST);
            $this->load->view('admin/register');
        }
        else {
            var_dump($_POST);
        }
    }
}