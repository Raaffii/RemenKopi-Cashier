<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => 'Username harus diisi']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi']);

        if ($this->form_validation->run() == false) {
            $this->template->load('auth/template', 'auth/V_login');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->M_auth->login($username);


        if ($akun == NULL) {
            redirect('auth');
        } else {
            if (password_verify($password, $akun['password'])) {
                $data = [
                    'username' => $akun['username']
                ];

                $this->session->set_userdata($data);
                redirect('pegawai');
            } else {
                redirect('auth');
            }
        }
    }




    public function register()
    {
        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            ['required' => 'Nama Harus Diisi !']
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[tb_user.email]',
            [
                'required' => 'Email Harus Diisi !',
                'valid_email' => 'Inputan Harus Berupa Email !',
                'is_unique' => 'Email Ini Telah Terdaftar !'
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[tb_user.username]',
            [
                'required' => 'Username Harus Diisi !',
                'is_unique' => 'Username Ini Telah Terdaftar !'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]',
            [
                'required' => 'Password Wajib Diisi !',
                'min_length' => 'Password Terlalu Pendek !'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password1',
            'required|trim|min_length[5]|matches[password1]',
            [
                'required' => 'Konfirmasi Password Wajib Diisi !',
                'matches' => 'Konfirmasi Password Harus Sama !',
                'min_length' => 'Password Terlalu Pendek !'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->template->load('auth/template', 'auth/V_register');
        } else {
            $data = [
                'nama_user' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),

            ];
            $this->db->insert('tb_user', $data);
            redirect('Auth');
        }
    }
}
