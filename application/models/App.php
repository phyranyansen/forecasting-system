<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('data_roti', $data);
        }
    }

    //save stok
    function save($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('stok_roti', $data);
        }
    }
}
