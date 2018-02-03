<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tarifc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function data_tarif()
	{

        $data=array(
            'headerTitle'=>'Tarif',
            'formTitle'=>'Halaman Tarif',

            'active_tarif'=>'active',
            'data_tarif'=>$this->adminm->getAllData('tbl_tarif'),
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/tarif/data_tarif');
        $this->load->view('elements/footer');
	}

    function proses_simpan_tarif() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'productid'=>$this->input->post('productid'),
            'layananid'=>$this->input->post('layananid'),
            'harga1'=>$this->input->post('harga1'),
            'harga2'=>$this->input->post('harga2'),
            'harimin'=>$this->input->post('harimin'),
            'harimax'=>$this->input->post('harimax'),
            'beratmin'=>$this->input->post('beratmin'),
        );
        $this->adminm->insertData('tbl_tarif',$data);
        redirect("tarifc/data_tarif");
    }

    function proses_ubah_tarif() {
        $id['tarifid'] = $this->input->post('tarifid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'productid'=>$this->input->post('productid'),
            'layananid'=>$this->input->post('layananid'),
            'harga1'=>$this->input->post('harga1'),
            'harga2'=>$this->input->post('harga2'),
            'harimin'=>$this->input->post('harimin'),
            'harimax'=>$this->input->post('harimax'),
            'beratmin'=>$this->input->post('beratmin'),
        );
        
        $this->adminm->updateData('tbl_tarif',$data,$id);
        redirect("tarifc/data_tarif");
    }

    function proses_hapus_layanan(){
        $id['tarifid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_tarif',$id);

        redirect("tarifc/data_tarif");
    }


}
    