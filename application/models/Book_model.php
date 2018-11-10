<?php
class Book_model extends CI_Model
{
    public function get_books($limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->db->join('book', 'book.category_id = category.id');
        $query = $this->db->get('category');
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

    public function get_books_by_category($category_id, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        $this->db->join('category', 'category.id = book.category_id');
        $query = $this->db->get_where('book', array('category_id' => $category_id));
        return $query->result_array();
    }

    public function get_book_by_id($id)
    {
        $query = $this->db->get_where('book', array('id' => $id));
        return $query->row();
    }

    public function record_view($book_id, $user_identifier)
    {
        $data = array(
            'user_identifier' => $user_identifier,
            'book_id' => $book_id,
        );

        return $this->db->insert('book_view', $data);
    }

    public function get_top5_recommendations($book_id, $user_identifier)
    {
        $sql = "SELECT book_id, COUNT(book_id) AS views FROM book_view
        WHERE user_identifier IN (
            SELECT  user_identifier FROM book_view
                WHERE book_id = ? AND user_identifier != ?
            ) AND book_id != ? GROUP BY book_id ORDER BY views DESC LIMIT 5";

        $query = $this->db->query($sql, array($book_id, $user_identifier, $book_id));
        $result_array = $query->result_array();

        return $this->get_books_by_ids(array_column($result_array, 'book_id'));
    }

    public function get_books_by_ids($ids)
    {
        //$this->db->from('book');
        $this->db->where_in('id', $ids);
        $query = $this->db->get('book');
        return $query->result_array();
    }
}
