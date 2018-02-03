<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class provc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function data_prov()
	{

        $data=array(
            'headerTitle'=>'Wilayah',
            'formTitle'=>'Provinsi Dan Kota',

            'active_wilayah'=>'active',
            'active_prov'=>'active',
            'data_prov'=>$this->adminm->get_all_data_prov(),
            
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/prov/data_prov');
        $this->load->view('elements/footer');
	}

        function proses_simpan_propinsi() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
        );
        $this->adminm->insertData('tbl_propinsi',$data);
        redirect("provc/data_prov");
    }

    function proses_ubah_propinsi() {
        $id['propinsiid'] = $this->input->post('propinsiid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
        );
        $this->adminm->updateData('tbl_propinsi',$data,$id);
        redirect("provc/data_prov");
    }

    function proses_hapus_propinsi(){
        $id['propinsiid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_propinsi',$id);

        redirect("negarac/data_prov");
    }



}
