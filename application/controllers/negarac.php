<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class negarac extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
    }
    
	public function data_negara()
	{

        $data=array(
            'headerTitle'=>'Wilayah',
            'formTitle'=>'Data Negara',

            'active_wilayah'=>'active',
            'active_negara'=>'active',
            'data_negara'=>$this->adminm->getAllData('tbl_negara'),
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/negara/data_negara');
        $this->load->view('elements/footer');
	}

    function proses_simpan_negara() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'kode'=>substr($this->input->post('nama'), 0, 2),
            'nama'=>$this->input->post('nama'),
            'zona'=>$this->input->post('zona'),
        );
        $this->adminm->insertData('tbl_negara',$data);
        redirect("negarac/data_negara");
    }

    function proses_ubah_negara() {
        $id['negaraid'] = $this->input->post('negaraid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'kode'=>substr($this->input->post('nama'), 0, 2),
            'nama'=>$this->input->post('nama'),
            'zona'=>$this->input->post('zona'),
        );
        $this->adminm->updateData('tbl_negara',$data,$id);
        redirect("negarac/data_negara");
    }

    function proses_hapus_negara(){
        $id['negaraid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_negara',$id);

        redirect("negarac/data_negara");
    }

}
