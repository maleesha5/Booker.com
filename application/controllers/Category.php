<?php
class Category extends CI_Controller
{
    public function index()
    {
        $data['categories'] = $this->category_model->get_categories();

        $this->load->view('header');
        $this->load->view('category/index', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('header');
            $this->load->view('category/create');
            $this->load->view('footer');
        } else {
            $this->category_model->create_category();
            redirect('category');
        }

    }

    public function get_category($id)
    {
        $data['title'] = $this->category_model->get_category($id)->name;
        $data['categories'] = $this->category_model->get_categories();
        $data['books'] = $this->book_model->get_books_by_category($id);

        $this->load->view('header');
        $this->load->view('book/index', $data);
        $this->load->view('footer');
    }
}
