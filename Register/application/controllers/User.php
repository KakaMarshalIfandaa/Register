<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
    }
	public function index()
	{
        $data = $this->Usermodel->getUser();
		$this->load->view('user/index',["data" => $data]);
	}

    public function error()
    {
        $this->load->view('user/error');
    }
    public function tambah()
    {
        $this->load->view('user/tambah');
    }
    public function action_tambah()
    {
      if($this->Usermodel->simpan()){
        redirect(base_url('index.php/user/tambah/'));
      }else{
          redirect(base_url('index.php/user/error/'));
      }
    }

    public function edit($id)
    {
        $data = $this->Usermodel->getData($id);
        $this->load->view('user/edit', ['data'=>$data]);
    }
    public function action_edit($id)
    {
      if($this->Usermodel->edit($id)){
        redirect(base_url('index.php/user/edit/'.$id));
      }else{
          redirect(base_url('index.php/user/error/'));
      }
    }
    public function delete($id)
    {
        if($this->Usermodel->delete($id)){
            redirect(base_url('index.php/user/'));
        }
    }
}
