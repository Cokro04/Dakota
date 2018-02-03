<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mitrac extends CI_Controller {
    function __construct(){
        parent::__construct();

        // if($this->session->userdata('LEVEL') == '' ){
        //     $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
        //     redirect('');
        // };

    }
    
	public function data_mitra()
	{

        $data=array(
            'headerTitle'=>'Mitra',
            'formTitle'=>'Halaman Mitra',

            'active_mitra'=>'active',
            'data_mitra'=>$this->adminm->getAllData('tbl_mitra'),
            'data_prov'=>$this->adminm->getAllData('tbl_propinsi'),
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/mitra/data_mitra');
        $this->load->view('elements/footer');
	}

    function proses_simpan_mitra() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'negaraid'=>$this->input->post('negaraid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'kodepos'=>$this->input->post('kodepos'),
            'telp'=>$this->input->post('telp'),
            'fax'=>$this->input->post('fax'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'personal_nama'=>$this->input->post('personal_nama'),
            'personal_hp'=>$this->input->post('personal_hp'),
            'personal_email'=>$this->input->post('personal_email'),
            'keterangan'=>$this->input->post('keterangan'),
        );
        $this->adminm->insertData('tbl_mitra',$data);
        redirect("mitrac/data_mitra");
    }

    function proses_ubah_pelanggan() {
        $id['mitraid'] = $this->input->post('mitraid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'tipeid'=>$this->input->post('tipeid'),
            'nama'=>$this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
            'negaraid'=>$this->input->post('negaraid'),
            'propinsiid'=>$this->input->post('propinsiid'),
            'propinsikotaid'=>$this->input->post('propinsikotaid'),
            'kodepos'=>$this->input->post('kodepos'),
            'telp'=>$this->input->post('telp'),
            'fax'=>$this->input->post('fax'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'personal_nama'=>$this->input->post('personal_nama'),
            'personal_hp'=>$this->input->post('personal_hp'),
            'personal_email'=>$this->input->post('personal_email'),
            'keterangan'=>$this->input->post('keterangan'),
        );
        $this->adminm->updateData('tbl_mitra',$data,$id);
        redirect("mitrac/data_mitra");
    }

    function proses_hapus_pelanggans(){
        $id['mitraid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_mitra',$id);

        redirect("mitrac/data_mitra");
    }


}
