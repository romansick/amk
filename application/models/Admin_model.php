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
    // public function getInvoice($id)
    // {
    //     $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`, `user`.`nama`, `bank`.`nama_bank`, `bank`.`no_rek`, `bank`.`nama_pemilik`
    //               FROM `metode_bayar` 
    //               JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`
    //               JOIN `user` ON `user`.`id` = `metode_bayar`.`user_id`
    //               JOIN `bank` ON `bank`.`id` = `metode_bayar`.`bank_id`
    //               WHERE `metode_bayar`.`id` = $id";
    //     return $this->db->query($query)->row_array();
    // }
    public function getInvoice($id)
    {
        $query = "SELECT `metode_bayar`.*, `metode_transaksi`.`metode`, `user`.`nama`, `bank`.`nama_bank`, `bank`.`no_rek`, `bank`.`nama_pemilik`, `tipe_rumah`.`kategori`
                  FROM `metode_bayar` 
                  JOIN `metode_transaksi` ON `metode_transaksi`.`id` = `metode_bayar`.`metode_id`
                  JOIN `user` ON `user`.`id` = `metode_bayar`.`user_id`
                  JOIN `bank` ON `bank`.`id` = `metode_bayar`.`bank_id`
                  JOIN `tipe_rumah` ON `tipe_rumah`.`id` = `metode_bayar`.`tipe_id`
                  WHERE `metode_bayar`.`id` = $id";
        return $this->db->query($query)->row_array();
    }
    public function getUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role` ON `user_role`.`id` = `user`.`role_id`";
        return $this->db->query($query)->result_array();
    }
    public function getUserNew()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role` ON `user_role`.`id` = `user`.`role_id`
                  WHERE `user_role`.`id` != 1";
        return $this->db->query($query)->result_array();
    }
    public function getKonsumen()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role` ON `user_role`.`id` = `user`.`role_id`
                  WHERE `user_role`.`id` = 3";
        return $this->db->query($query)->result_array();
    }
    public function countRumah()
    {
        $query = "SELECT `list_rumah`.*, `tipe_rumah`.`kategori`, `lokasi_rumah`.`lokasi`
                  FROM `list_rumah` 
                  JOIN `tipe_rumah` ON `tipe_rumah`.`id` = `list_rumah`.`tipe_id`
                  JOIN `lokasi_rumah` ON `lokasi_rumah`.`id` = `list_rumah`.`lokasi_id`";
        return $this->db->query($query)->result_array();
    }
    public function countRumahByLokasi()
    {
        $query = "SELECT `list_rumah`.*, `tipe_rumah`.`kategori`, `lokasi_rumah`.`lokasi`
                  FROM `list_rumah` 
                  JOIN `tipe_rumah` ON `tipe_rumah`.`id` = `list_rumah`.`tipe_id`
                  JOIN `lokasi_rumah` ON `lokasi_rumah`.`id` = `list_rumah`.`lokasi_id`";
        return $this->db->query($query)->result_array();
    }
    public function countRumahById($id)
    {
        $query = "SELECT `list_rumah`.*, `tipe_rumah`.`kategori`, `lokasi_rumah`.`lokasi`
                  FROM `list_rumah` 
                  JOIN `tipe_rumah` ON `tipe_rumah`.`id` = `list_rumah`.`tipe_id`
                  JOIN `lokasi_rumah` ON `lokasi_rumah`.`id` = `list_rumah`.`lokasi_id`
                  WHERE `list_rumah`.`id` = $id";
        return $this->db->query($query)->row_array();
    }
}
