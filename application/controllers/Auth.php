<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // Jika Validasi sesuai jalankan login
            $this->_login();
        } else {
            // Jika Validasi salah
            $data['title'] = 'Login';

            $this->load->view('template/header_login', $data);

            $this->load->view('auth/login_view');

            $this->load->view('template/footer_login');
        }
    }

    public function showregis()
    {
        echo form_open('auth/register');
        echo form_input('username', 'Username');
        echo form_input('password', 'Password');
        echo form_input('nama', 'Nama');
        $options = array('admin' => 'bapak', 'user' => 'bro');
        echo form_dropdown('role', $options);
        echo form_submit('submit', 'Add');
        echo form_close();
    }

    public function register()
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'nama' => htmlspecialchars($this->input->post('nama'), true),
            'role' => $this->input->post('role', true)
        ];

        $this->load->model('user_model');
        $this->user_model->insert($data);

        redirect('auth', 'refresh');
    }

    public function logout()
    {
        $data = [
            'id' => '',
            'username' => '',
            'nama' => ''
        ];

        $this->session->unset_userdata($data);
    }

    private function _login()
    {
        $this->load->model('user_model');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->get_login($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->_sessionbuilder($user);
                if ($user['role'] == 'admin') {

                    redirect('admin', 'refresh');
                } elseif ($user['role'] == 'user') {

                    redirect('user', 'refresh');
                }
            } else {
                echo 'password salah';
            }
        } else {
            echo 'gagal';
        }
    }

    private function _sessionbuilder($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'nama' => $user['nama']
        ];

        $this->session->set_userdata($data);
    }
}
