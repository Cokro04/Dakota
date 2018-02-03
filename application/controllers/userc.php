<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userc extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('loginc');
        };
    }

/*===========================================================================================================================================*/
/*===========================================================================================================================================*/

	public function data_user()
	{
        $data=array(
            'headerTitle'=>'Data User',
            'formTitle'=>'Tabel Data User',

            'active_user'=>'active',            
            'data_user'=>$this->adminm->getAllData('tbl_user'),
        );		
		$this->load->view('elements/header', $data);
		$this->load->view('pages/user/data_user');
		$this->load->view('elements/footer');
	}

	public function manage_data_user()
	{
        $id= $this->uri->segment(3);
		if ($id == '') {

	        $data=array(
	            'headerTitle'=>'Data User',
	            'formTitle'=>'Form Tambah User',

	            'active_user'=>'active',            
	            'id'=>$this->adminm->id_user(),

	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_user');
			$this->load->view('elements/footer');

		} else {
	        $id_user['id_user']= $this->uri->segment(3);
	        $data=array(
	            'headerTitle'=>'Data User',
	            'formTitle'=>'Form Ubah User',

	            'active_user'=>'active',            
	            'data_user'=>$this->adminm->getSelectedData('tbl_user',$id_user),
	        );		
			$this->load->view('elements/header', $data);
			$this->load->view('pages/user/manage_data_user');
			$this->load->view('elements/footer');

		}
	}


    function proses_data_user() {
        $key     = $this->input->post('id_user');
        $pass    = $this->input->post('password');
    	if ($key != '') {

	        $data=array(
		        'id_user'=>$this->input->post('id_user'),
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	            'level_user'=>$this->input->post('level_user'),
	            'alamat_user'=>$this->input->post('alamat_user'),
	            'notelp_user'=>$this->input->post('notelp_user'),
	        );
	        $this->adminm->insertData('tbl_user',$data);


    	} elseif ($key == '' AND $pass == '') {

	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'level_user'=>$this->input->post('level_user'),
	            'alamat_user'=>$this->input->post('alamat_user'),
	            'notelp_user'=>$this->input->post('notelp_user'),	            
	        );
	        $this->adminm->updateData('tbl_user',$data,$id);

    	} elseif ($key == '' AND $pass != '') {
	        $id['id_user'] = $this->input->post('id');
	        $data=array(
	            'nm_user'=>$this->input->post('nm_user'),
	            'username'=>$this->input->post('username'),
	            'password'=>md5($this->input->post('password')),
	            'level_user'=>$this->input->post('level_user'),
	            'alamat_user'=>$this->input->post('alamat_user'),
	            'notelp_user'=>$this->input->post('notelp_user'),
	        );
	        $this->adminm->updateData('tbl_user',$data,$id);
    	}
        redirect("userc/data_user");
    }

    function proses_hapus_user(){
        $id['id_user'] = $this->uri->segment(3);
        $this->adminm->deleteData('tbl_user',$id);

        redirect("userc/data_user");
    }


}
