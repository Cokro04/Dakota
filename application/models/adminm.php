<?php

class adminm extends CI_Model{

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //


    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data)->result();
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    public function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    public function viewByProvinsi($propinsiid){
    $this->db->where('propinsiid', $propinsiid);
    $result = $this->db->get('tbl_propinsi_kota')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }


// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //
    function get_all_data_prov(){
        return $this->db->query("
            SELECT *, a.nama, a.propinsiid,
            (select count(propinsiid) as jum from tbl_propinsi_kota where propinsiid=a.propinsiid) as jumlah_kota
            FROM tbl_propinsi a
            LEFT JOIN tbl_propinsi_kota b ON a.propinsiid = b.propinsiid
            GROUP BY a.propinsiid
        ")->result();
    }

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //
    function get_all_data_kota($id_provinsi){
        return $this->db->query("
            SELECT *
            FROM tbl_propinsi_kota a
            WHERE a.propinsiid = '$id_provinsi'
        ")->result();
    }
// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //
    function get_all_data_kecamatan(){
        return $this->db->query("
            SELECT *, a.nama, a.propinsiid,
            (select count(propinsiid) as jum from tbl_propinsi_kota where propinsiid=a.propinsiid) as jumlah_kota
            FROM tbl_propinsi a
            LEFT JOIN tbl_propinsi_kota b ON a.propinsiid = b.propinsiid
        ")->result();
    }

// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_user');
/*
        $this->db->join('tbl_pegawai', 'tbl_user.id_pegawai = tbl_pegawai.id_pegawai');
*/
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

/*
Source Code by : Aldy Muldani
Email : dieabra@gmail.com
Github : https://github.com/alldie1207
Line : alldie1207
No: 082295673583
2017-2018
*/// ===========================================          Script         ======================================= //
// ===========================================                         ======================================= //

}
