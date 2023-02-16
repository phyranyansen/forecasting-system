<?php

class Admin_model extends CI_Model {

    function getAll($table)
    {
        $query = $this->db->get($table);
        return $query->result_array();
    }


   function jumlah_data()
    {
       $query =  $this->db->query('SELECT COUNT(*) AS jumlah FROM data_roti');  
        return $query->result_array();
    }

   function jumlah_data_jenis()
    {
       $query =  $this->db->query('SELECT COUNT(*) AS jumlah FROM jenis_roti');  
        return $query->result_array();
    }

   // function stok_terjual()
    //{
                 
       // $query =  $this->db->query('SELECT COUNT(*) AS jumlah FROM stok_roti WHERE YEARWEEK(tgl) = YEARWEEK(NOW() - INTERVAL 1 WEEK) AND status="terjual"');  
      //  return $query->result_array();
   // }

    
 

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function delete_all($id)
    {
      
        $this->db->where_in('id_roti', $id);
        $this->db->delete('data_roti');
    }

    function getWhere($table, $id)
    {
        $query = $this->db->get_where($table, $id);
        return $query->row();
    }

    function stok_roti()
    {
        $this->db->select('id_stok, stok_roti.id_roti, nama_roti, nama_jenis, stok_roti.tgl, harga, stok_roti.jumlah, status, stok_roti.id_jenis_roti');
        $this->db->from('stok_roti');
        $this->db->join('data_roti', 'data_roti.id_roti=stok_roti.id_roti');     
        $this->db->join('jenis_roti', 'data_roti.id_jenis_roti=jenis_roti.id_jenis');     
        $this->db->order_by('5', 'desc');            
        $query = $this->db->get();
        return $query->result_array();
    }

    function getRoti()
    {
        $this->db->select('id_roti, nama_roti, nama_jenis, tgl, jumlah, id_jenis_roti');
        $this->db->from('data_roti');
        $this->db->join('jenis_roti', 'data_roti.id_jenis_roti=jenis_roti.id_jenis');     
        $this->db->order_by('2', 'asc');            
        $query = $this->db->get();
        return $query->result_array();
    }

   
    function periode()
    {
        $array = array('nama_roti' => 'strawberry', 'nama_roti' => 'Nanas', 'nama_roti' => 'Melon', 'nama_roti' => 'Blueberry', 
        'nama_roti' => 'Vanilla');

       $this->db->select('count(nama_roti) as jumlah');
       $this->db->from('data_roti');
       $this->db->where($array);
       $query = $this->db->get();
       return $query->result_array();
    }

    function tambah_roti()
    {
        $data   = [
            'nama_roti'         => $this->input->post('nama_roti'),
            'id_jenis_roti'     => $this->input->post('jenis_roti'),
            'tgl'               => $this->input->post('tanggal'),
            'jumlah'            => $this->input->post('jumlah')
        ];
        $this->db->insert('data_roti', $data);
    }

    function tambah_jenis()
    {
        $data   = [
            'nama_jenis'     => $this->input->post('jenis_roti')
        ];
        $this->db->insert('jenis_roti', $data);
    }

    function tambah_user($user)
    {
        $this->db->insert('user', $user);
        return $this->db->insert_id();
    }

    public function getUser($id)
    {
        $query = $this->db->get_where('user', array('id_user' => $id));
        return $query->row_array();
    }
    
    public function activate($data, $id)
    {
        $this->db->where('user.id_user', $id);
        return $this->db->update('user', $data);
    }

    function edit_roti($id)
    {
        $data   = [
            'id_roti'           => $id,
            'nama_roti'         => $this->input->post('nama_roti'),
            'id_jenis_roti'     => $this->input->post('jenis_roti'),
            'tgl'               => $this->input->post('tanggal'),
            'minggu'            => $this->input->post('minggu'),
            'jumlah'            => $this->input->post('jumlah')
        ];
        $this->db->update('data_roti', $data, array('id_roti' => $data['id_roti']));
    }
    function edit_jenis($id)
    {
        $data   = [
            'id_jenis'           => $id,
            'nama_jenis'         => $this->input->post('nama_jenis')
        ];
      $this->db->update('jenis_roti', $data, array('id_jenis' => $data['id_jenis']));
    }

    function forecasting($id, $periode_awal, $periode_akhir)
    {
       

        $this->db->select('nama_roti, jumlah, tgl');
        $this->db->from('data_roti');
        $this->db->join('jenis_roti', 'data_roti.id_jenis_roti=jenis_roti.id_jenis');
        $this->db->where('id_jenis_roti', $id);
        $this->db->where("tgl BETWEEN '$periode_awal' AND '$periode_akhir'");
        $query = $this->db->get();
        return $query->result_array();
    }

    function cari_data($id, $m)
    {
        $array = array('id_jenis_roti' => $id, 'minggu' =>$m);
        $this->db->select('jumlah');
        $this->db->from('data_roti');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result_array();
    }
    
	function minggu()
    {

        $this->db->distinct();
        $this->db->select('tgl');
        $this->db->from('data_roti');
        $query = $this->db->get();
        return $query->result_array();
    }
	
    


}