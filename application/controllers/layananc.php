<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layananc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function data_layanan()
	{

        $data=array(
            'headerTitle'=>'Layanan',
            'formTitle'=>'Halaman Layanan',

            'active_layanan'=>'active',
            'data_layanan'=>$this->adminm->getAllData('tbl_layanan'),
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/layanan/data_layanan');
        $this->load->view('elements/footer');
	}

    function proses_simpan_layanan() {
        $data=array(
            'create_date'=>$this->input->post('create_date'),
            'create_userid'=>$this->input->post('create_userid'),
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'judul'=>$this->input->post('judul'),
            'alias'=>$this->input->post('alias'),
            'ringkas'=>$this->input->post('ringkas'),
            'lengkap'=>$this->input->post('lengkap'),
            'gambar'=>$this->input->post('gambar'),
            'gambar1'=>$this->input->post('gambar1'),
            'tanggalpost'=>$this->input->post('tanggalpost'),
            'published'=>$this->input->post('published'),
            'view'=>$this->input->post('view'),
        );
        $this->adminm->insertData('tbl_layanan',$data);
        redirect("layananc/data_layanan");
    }

    function proses_ubah_layanan() {
        $id['layananid'] = $this->input->post('layananid');
        $data=array(
            'update_date'=>$this->input->post('update_date'),
            'update_userid'=>$this->input->post('update_userid'),
            'judul'=>$this->input->post('judul'),
            'alias'=>$this->input->post('alias'),
            'ringkas'=>$this->input->post('ringkas'),
            'lengkap'=>$this->input->post('lengkap'),
            'gambar'=>$this->input->post('gambar'),
            'gambar1'=>$this->input->post('gambar1'),
            'tanggalpost'=>$this->input->post('tanggalpost'),
            'published'=>$this->input->post('published'),
            'view'=>$this->input->post('view'),
        );
    
        $this->adminm->updateData('tbl_layanan',$data,$id);
        redirect("layananc/data_layanan");
    }

    function proses_hapus_layanan(){
        $id['layananid'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_layanan',$id);

        redirect("layananc/data_layanan");
    }


}
