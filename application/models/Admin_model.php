<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
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
    // public function getTransaksi()
    // {
    //     $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`, `user`.`nama`, `bank`.`nama_bank`, `bank`.`no_rek`, `bank`.`nama_pemilik`
    //               FROM `metode_bayar` 
    //               JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`
    //               JOIN `user` ON `user`.`id` = `metode_bayar`.`user_id`
    //               JOIN `bank` ON `bank`.`id` = `metode_bayar`.`bank_id`";
    //     return $this->db->query($query)->result_array();
    // }
    public function getTransaksi()
    {
        $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`, `user`.`nama`
                  FROM `metode_bayar`
                  INNER JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`
                  INNER JOIN `user` ON `user`.`id` = `metode_bayar`.`user_id`
                --   INNER JOIN `bank` ON `bank`.`id` = `metode_bayar`.`bank_id`
                  WHERE `metode_bayar`.`user_id` = `user`.`id`";
        return $this->db->query($query)->result_array();
    }
    public function getInvoice($id)
    {
        $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`, `user`.`nama`, `bank`.`nama_bank`, `bank`.`no_rek`, `bank`.`nama_pemilik`
                  FROM `metode_bayar` 
                  JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`
                  JOIN `user` ON `user`.`id` = `metode_bayar`.`user_id`
                  JOIN `bank` ON `bank`.`id` = `metode_bayar`.`bank_id`
                  WHERE `metode_bayar`.`id` = $id";
        return $this->db->query($query)->row_array();
    }
}
