<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginc extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('LEVEL') != '' ){
            redirect('dashboardc');
        };

        $data=array(

        );
		$this->load->view('pages/login',$data);
	}

    public function detail_data_batu()
    {
        $id_batu['id_batu']= $this->uri->segment(3);
        $data=array(
            'headerTitle'=>'Data Batu',
            'formTitle'=>'Form detail Batu',

            'active_batu'=>'active',            
            'data_batu'=>$this->adminm->getSelectedData('tbl_batu',$id_batu),
        );
        $this->load->view('pages/detail_batu',$data);
    }


/*===========================================================================================================================================*/
/*===========================================================================================================================================*/


    function proses_login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->adminm->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id_user,
                    'USERNAME' => $row->username,
                    'PASS'=>$row->password,
                    'NAME'=>$row->nm_user,
                    'LEVEL' => $row->level_user,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);

                if ($this->session->userdata('LEVEL') != ''){ 
                redirect('dashboardc','refresh');
                } 

            }
            return TRUE;
        } else {
            //jika validasi salah
            $this->session->set_flashdata('notif','Username atau Password salah');
            redirect('','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('');
    }

}
