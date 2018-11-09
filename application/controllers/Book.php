<?php
class Book extends CI_Controller
{
    public function index($offset = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url() . 'book/index/';
        $config['total_rows'] = $this->db->count_all('book');
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');

        // Init Pagination
        $this->pagination->initialize($config);

        $data['categories'] = $this->category_model->get_categories();
        $data['books'] = $this->book_model->get_books($config['per_page'], $offset);
        $this->load->view('header');
        $this->load->view('book/index', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        if (!$this->session->userdata('login_status')) {
            redirect('admin/login');
        }
        $data['categories'] = $this->category_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('category_id', 'Category', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('book/create', $data);
            $this->load->view('footer');
        } else {
            $this->book_model->create_book();
            redirect('book');
        }
    }
}