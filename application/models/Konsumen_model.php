<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsumen_model extends CI_Model
{
    public function getRumah()
    {
        $query = "SELECT `list_rumah`.*, `lokasi_rumah`.`lokasi`, `tipe_rumah`.`kategori`
                 FROM `list_rumah`
                 JOIN `lokasi_rumah` ON  `list_rumah`.`lokasi_id` = `lokasi_rumah`.`id`
                 JOIN `tipe_rumah` ON `list_rumah`.`tipe_id` = `tipe_rumah`.`id`
       ";
        return $this->db->query($query)->result_array();
    }
    public function getRumahById($id)
    {
        $query = "SELECT `list_rumah`.*, `lokasi_rumah`.`lokasi`, `tipe_rumah`.`kategori`
                 FROM `list_rumah`
                 JOIN `lokasi_rumah` ON  `list_rumah`.`lokasi_id` = `lokasi_rumah`.`id`
                 JOIN `tipe_rumah` ON `list_rumah`.`tipe_id` = `tipe_rumah`.`id`
                 WHERE `list_rumah`.`id` = $id
       ";
        return $this->db->query($query)->row_array();
    }
    public function getTransaksi()
    {
        $user =
            $this->session->userdata('id');
        $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`
                  FROM `metode_bayar` 
                  JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`";
        return $this->db->query($query)->result_array();
    }
}
