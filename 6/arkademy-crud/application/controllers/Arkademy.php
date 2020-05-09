<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Arkademy extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('arkademy_model');
        }
        
    
        public function index()
        {
            
            $data['title'] = "Arkademy";
            $data['datas'] = $this->arkademy_model->get_data();
            $this->load->view('template/header', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('arkademy/home', $data);
            $this->load->view('template/footer', $data);
        }

        public function add_product()
        {   
            $cashier = $this->input->post('cashier');
            $product = $this->input->post('product');
            $category = $this->input->post('category');
            $price = $this->input->post('price');

            $data = [
                'name' => $product,
                'price' => $price,
                'id_cashier' =>$cashier,
                'id_category' => $category,
            ];
            
            $this->db->insert('product', $data);
            $this->session->set_flashdata('massage', '<div class="col-6 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Product</strong> data successfully added.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('arkademy/');
        }

        public function edit_data($id)
        {
            $cashier = $this->input->post('cashier');
            $product = $this->input->post('product');
            $category = $this->input->post('category');
            $price = $this->input->post('price');

            $data = [
                'name' => $product,
                'price' => $price,
                'id_cashier' =>$cashier,
                'id_category' => $category,
            ];
            
            $this->arkademy_model->update_data('product', $data, 'id', $id);
            $this->session->set_flashdata('massage', '<div class="col-6 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Product</strong> data successfully Edited.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('arkademy');
        }

        public function delete_data($id)
        {
            $this->arkademy_model->delete_data('product', ['id' => $id]);
            $this->session->set_flashdata('massage', '<div class="col-6 alert alert-success alert-dismissible fade show" role="alert">
                <strong>Product</strong> data successfully Deleted.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('arkademy');
        }


    
    }
?>