<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlist extends CI_Model
{
    function getTablelist()
    {
        $query = "SELECT `tb_matkul`.* FROM `tb_matkul`";
        return $this->db->query($query)->result_array();
    }
    function deletematkul($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_matkul');
    }
    function view($id)
    {
        return $this->db->get_where('tb_matkul', ['id' => $id])->row_array();
    }
    function viewmateri($id)
    {
        return $this->db->get_where('tb_materi', ['id_materi' => $id])->row_array();
    }
    function getTablemateri()
    {
        $query = "SELECT `tb_materi`.* FROM `tb_materi`";
        return $this->db->query($query)->result_array();
    }
    function deletemateri($id)
    {
        $this->db->where('id_materi', $id);
        $this->db->delete('tb_materi');
    }
    function getTableedit($id)
    {
        return $this->db->get_where('tb_materi', ['id_materi' => $id])->row_array();
    }
    function getView()
    {
        $query = "SELECT `tb_materi`.*, `tb_matkul`.*
        FROM `tb_materi` JOIN `tb_matkul` ON `tb_materi`.`id_materi` = `tb_matkul`,`id`";

        return $this->db->query($query)->result_array();
    }
}
