
<?php
class Products extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('products_model');
        }
 
        public function index()
        {
                $this->load->view('products_lookup_view');
        }
 
        public function FindProduct()
        {
				//Collect the post data from form
                $ptype = $this->input->post('product_type');
                 			
                //Send it to the model
				$results = $this->products_model->Lookup($ptype);
					
				//Pass the results to the dispaly view
				$data['products'] = $results;
				$this->load->view('Products_display_view',$data);
						
        }
} 
?>     