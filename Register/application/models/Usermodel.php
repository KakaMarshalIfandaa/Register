<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_model {
    public function simpan()
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->insert('user', $data);
        }
    }

    public function edit($id)
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->update('user', $data,['id'=>$id]);
        }
    }
    public function getUser()
    {
        $username = $this->input->get('username');
        if(!empty($username)){
            return $this->db->query('SELECT * FROM user WHERE username LIKE ?', '%'.$username.'%')->result_array();
        }else{
            return $this->db->get('user')->result_array(); 
        }
    }
    public function getData($id)
    {
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }
    public function delete($id)
    {
     return $this->db->delete('user',['id'=>$id]);   
    }
}
