<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardc extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('LEVEL') == '' ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };

    }
    
	public function index()
	{

        $data=array(
            'headerTitle'=>'Dashboard',
            'formTitle'=>'Halaman Dashboard',

            'active_dashboard'=>'active',

        );
        $this->load->view('elements/header', $data);
        $this->load->view('pages/dashboard');
        $this->load->view('elements/footer');
	}

    public function send_email()
    {

        $htmlContent = '<h2>Saudara yang terhormat paspor anda sudah jadi, silahkan ambil di kantor imigras</h2>';
        $htmlContent .= '<div>Silahkan bawa berkas yang bersangkutan untuk pengambilan paspor, Terimakasih</div>';

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_user']    = 'dieabra@gmail.com';
        $config['smtp_pass']    = '!#%&(di3';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from('dieabra@gmail.com', 'Imigrasi');
        $this->email->to('dieabra@gmail.com'); 

        $this->email->subject('Informasi Pengambilan Paspor');
        $this->email->message($htmlContent);

        $this->email->send();

        echo $this->email->print_debugger();
    }

}
