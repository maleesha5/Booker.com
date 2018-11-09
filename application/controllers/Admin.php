<?php
class Admin extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('admin/login');
            $this->load->view('footer');

        } else {
            // Get username
            $username = $this->input->post('username');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));

            // Login user
            $admin_id = $this->admin_model->login($username, $password);

            if ($admin_id) {

                $admin_data = array(
                    'admin_id' => $admin_id,
                    'username' => $username,
                    'login_status' => true,
                );

                $this->session->set_userdata($admin_data);

                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                redirect('book');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('admin/login');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('user_logout', 'Logout successfuly');
        redirect('admin/login');
    }
}
