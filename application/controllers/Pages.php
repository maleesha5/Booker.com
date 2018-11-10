<?php
class Pages extends CI_Controller
{
    //Handles routing requests of the app
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
            show_404();
        }
        print_r('sss');
        $data['title'] = ucfirst($page);

        $this->load->view('header');
        $this->load->view($page);
        $this->load->view('footer');

    }
}
