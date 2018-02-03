<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kecamatanc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function data_kecamatan()
	{

        $data=array(
            'headerTitle'=>'Dashboard',
            'formTitle'=>'Data Kecamatan',

            'active_wilayah'=>'active',
            'active_kec'=>'active',
            'data_kecamatan'=>$this->adminm->getAllData('tbl_kota_kecamatan'),
            
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/kecamatan/data_kecamatan');
        $this->load->view('elements/footer');
	}

    function proses_simpan_kecamatan() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'kodepos'=>$this->input->post('kodepos'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
        );
        $this->adminm->insertData('tbl_kota_kecamatan',$data);
        redirect("kecamatanc/data_kecamatan");
    }

    function proses_ubah_kecamatan() {
        $id['kotakecamatanid'] = $this->input->post('kotakecamatanid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'kodepos'=>$this->input->post('kodepos'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
        );
        $this->adminm->updateData('tbl_kota_kecamatan',$data,$id);
        redirect("kecamatanc/data_kecamatan");
    }

    function proses_hapus_kecamatan(){
        $id['kotakecamatanid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_kota_kecamatan',$id);

        redirect("kecamatanc/data_kecamatan");
    }
}
