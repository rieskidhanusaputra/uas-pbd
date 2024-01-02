<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdosen extends CI_Model
{
    function getTableschedule()
    {
        $query = "SELECT `tb_schedule`.* FROM `tb_schedule`";
        return $this->db->query($query)->result_array();
    }
    function getTablemidterm()
    {
        $query = "SELECT `tb_midterm`.* FROM `tb_midterm`";
        return $this->db->query($query)->result_array();
    }
    function getTablefinalexam()
    {
        $query = "SELECT `tb_finalexam`.* FROM `tb_finalexam`";
        return $this->db->query($query)->result_array();
    }
    function deleteschedule($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_schedule');
    }
    function deletemidterm($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_midterm');
    }
    function deletefinalexam($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_finalexam');
    }
    function getTableeditschedule($id)
    {
        return $this->db->get_where('tb_schedule', ['id' => $id])->row_array();
    }
    function getTableeditmidterm($id)
    {
        return $this->db->get_where('tb_midterm', ['id' => $id])->row_array();
    }
    function getTableeditfinalexam($id)
    {
        return $this->db->get_where('tb_finalexam', ['id' => $id])->row_array();
    }
}
