<?php
class Book_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_books($limit = FALSE, $offset = FALSE)
    {
        if($limit){
            $this->db->limit($limit, $offset);
        }
        $this->db->join('category', 'category.id = book.category_id');
        $query = $this->db->get('book');
        return $query->result_array();
    }

    public function create_book()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'category_id' => $this->input->post('category_id'),
        );

        return $this->db->insert('book', $data);
    }

    public function get_books_by_category($category_id)
    {
        //$this->db->order_by('book.id', 'DESC');
        $this->db->join('category', 'category.id = book.category_id');
        $query = $this->db->get_where('book', array('category_id' => $category_id));
        return $query->result_array();
    }
}
