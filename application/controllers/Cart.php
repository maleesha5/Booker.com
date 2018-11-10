<?php
class Cart extends CI_Controller
{
    public function index()
    {
        $data['books'] = array_values(unserialize($this->session->userdata('cart')));

        $this->load->view('header');
        $this->load->view('cart/index', $data);
        $this->load->view('footer');
    }

    public function add_to_cart($id)
    {
        $book = $this->book_model->get_book_by_id($id);
        print_r($book);
        $item = array(
            'id' => $id,
            'title' => $book->title,
            'price' => $book->price,
            'quantity' => 1,
        );
        if (!$this->session->has_userdata('cart')) {
            $cart = array($item);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $index = $this->exists($id);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if ($index == -1) {
                array_push($cart, $item);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$index]['quantity']++;
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        print_r(array_values(unserialize($this->session->userdata('cart'))));
        $this->session->set_flashdata('item_added', 'Item added to cart');
        redirect('book');
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        unset($cart[$index]);
        $this->session->set_userdata('cart', serialize($cart));
        redirect('cart');
    }

    private function exists($id)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
}
