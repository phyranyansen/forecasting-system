<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    
	public function index()
	{       
            $data['title'] = 'Alfarizqy Bakery';
            $this->load->view('index', $data);
	}
	

    public function sign_in()
    {
        $data['title'] = 'Login system';
        $this->load->view('login', $data);
    }

    function login()
    {
        
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run()==false)
        {
            redirect(base_url('sign_in'));
        }else{
           $this->_login();
        }
    }

    private function  _login()
    {
        $username      	= $this->input->post('username');
        $password   	= $this->input->post('password');
        $user       	= $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user != null) {
            if (base64_encode($password) == $user['password']) {
                $data = [
                    'id_user'      	=> $user['id_user'],
                    'username'      => $user['username'],
                    'email'         => $user['email'],
                    'active'        => $user['active'],
                    'login'         => 'sign_up'
                ];

               
                    $this->session->set_userdata($data);
                    echo "<script>alert('Login berhasil, welcome ".$this->session->userdata('username')."!');</script>";
                    echo "<script>window.location='".site_url('dashboard')."'</script>";

               
               
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong> Maaf Password Salah ! </strong></div>');
				redirect(base_url('sign-in'));
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <strong> Maaf, akun anda belum terdaftar. Silahkan hubungi pihak terkait, untuk registrasi akun terlebih dahulu! </strong></div>');
            redirect(base_url('sign-in'));
        }
    }


    function logout()
	{
		$this->session->sess_destroy();
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('email');
		redirect(base_url());
	}



}
