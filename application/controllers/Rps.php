<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlist');
    }
    function index()
    {
        $data['datarps'] = $this->Mlist->getTablelist();
        $data['tb_matkul'] = $this->db->get('tb_matkul')->result_array();
        $this->load->view('list', $data);
    }
    function create()
    {
        $data['datarps'] = $this->Mlist->getTablelist();
        $data['tb_matkul'] = $this->db->get('tb_matkul')->result_array();

        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('gambaran_umum', 'Gambaran_umum');
        $this->form_validation->set_rules('capaian_pembelajaran', 'Capaian_pembelajaran');
        $this->form_validation->set_rules('prasyarat', 'Prasyarat');
        $this->form_validation->set_rules('kemampuan', 'Kemampuan');
        $this->form_validation->set_rules('indikator', 'Indikator');
        $this->form_validation->set_rules('bahan_kajian', 'Bahan_kajian');
        $this->form_validation->set_rules('metode_pembelajaran', 'Metode_pembelajaran');
        $this->form_validation->set_rules('waktu', 'Waktu');
        $this->form_validation->set_rules('metode_penilaian', 'Metode_penilaian');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan_ajar');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas');
        $this->form_validation->set_rules('waktu_tugas', 'Waktu_tugas');
        $this->form_validation->set_rules('bobot', 'Bobot');
        $this->form_validation->set_rules('kriteria', 'Kriteria');
        $this->form_validation->set_rules('indikator_penilaian', 'Indikator_penilaian');
        $this->form_validation->set_rules('referensi', 'Referensi');

        if ($this->form_validation->run() == false) {
            $this->load->view('create', $data);
        } else {
            $data = [
                'program_studi' => $this->input->post('program_studi'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'semester' => $this->input->post('semester'),
                'sks' => $this->input->post('sks'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambaran_umum' => $this->input->post('gambaran_umum'),
                'capaian_pembelajaran' => $this->input->post('capaian_pembelajaran'),
                'prasyarat' => $this->input->post('prasyarat'),
                'kemampuan' => $this->input->post('kemampuan'),
                'indikator' => $this->input->post('indikator'),
                'bahan_kajian' => $this->input->post('bahan_kajian'),
                'metode_pembelajaran' => $this->input->post('metode_pembelajaran'),
                'waktu' => $this->input->post('waktu'),
                'metode_penilaian' => $this->input->post('metode_penilaian'),
                'bahan_ajar' => $this->input->post('bahan_ajar'),
                'aktivitas' => $this->input->post('aktivitas'),
                'waktu_tugas' => $this->input->post('waktu_tugas'),
                'bobot' => $this->input->post('bobot'),
                'kriteria' => $this->input->post('kriteria'),
                'indikator_penilaian' => $this->input->post('indikator_penilaian'),
                'referensi' => $this->input->post('referensi'),
            ];
            $this->db->insert('tb_matkul', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added successfully!</div>');
            redirect('rps/index');
        }
    }
    function delete($id)
    {
        $this->Mlist->deletematkul($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete successfully!</div>');
        redirect('rps/index');
    }
    function view($id)
    {
        $data['datarps'] = $this->Mlist->view($id);
        $data['datamateri'] = $this->Mlist->getTablemateri();
        $this->load->view('view', $data);
    }
    function listmateri()
    {
        $data['datamateri'] = $this->Mlist->getTablemateri();
        $data['tb_materi'] = $this->db->get('tb_materi')->result_array();
        $this->load->view('listmateri', $data);
    }
    function deletemateri($id)
    {
        $this->Mlist->deletemateri($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete successfully!</div>');
        redirect('rps/listmateri');
    }
    function addmateri()
    {
        $data['datamateri'] = $this->Mlist->getTablemateri();
        $data['tb_materi'] = $this->db->get('tb_materi')->result_array();

        $this->form_validation->set_rules('pertemuan', 'Pertemuan', 'required');
        $this->form_validation->set_rules('kemampuan_akhir', 'Kemampuan_akhir', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian');

        if ($this->form_validation->run() == false) {
            $this->load->view('addmateri', $data);
        } else {
            $data = [
                'pertemuan' => $this->input->post('pertemuan'),
                'kemampuan_akhir' => $this->input->post('kemampuan_akhir'),
                'indikator' => $this->input->post('indikator'),
                'topik' => $this->input->post('topik'),
                'aktivitas' => $this->input->post('aktivitas'),
                'waktu' => $this->input->post('waktu'),
                'penilaian' => $this->input->post('penilaian'),
            ];
            $this->db->insert('tb_materi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added successfully!</div>');
            redirect('rps/listmateri');
        }
    }
    function editmateri($id)
    {
        $data['datamateri'] = $this->Mlist->getTableedit($id);
        // $data['tb_materi'] = $this->db->get('tb_materi')->result_array();

        $this->form_validation->set_rules('pertemuan', 'Pertemuan', 'required');
        $this->form_validation->set_rules('kemampuan_akhir', 'Kemampuan_akhir', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian');

        if ($this->form_validation->run() == false) {
            $this->load->view('editmateri', $data);
        } else {
            $updatemateri = array(
                'pertemuan' => $this->input->post('pertemuan'),
                'kemampuan_akhir' => $this->input->post('kemampuan_akhir'),
                'indikator' => $this->input->post('indikator'),
                'topik' => $this->input->post('topik'),
                'aktivitas' => $this->input->post('aktivitas'),
                'waktu' => $this->input->post('waktu'),
                'penilaian' => $this->input->post('penilaian')
            );
            $this->db->where('id_materi', $id);
            $this->db->update('tb_materi', $updatemateri);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit successfully!</div>');
            redirect('rps/listmateri');
        }
    }
}
