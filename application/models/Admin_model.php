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
}
