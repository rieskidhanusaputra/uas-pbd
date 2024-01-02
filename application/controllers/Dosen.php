<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mdosen');
    }
    function listSchedule()
    {
        $data['dataschedule'] = $this->Mdosen->getTableschedule();
        $data['tb_schedule'] = $this->db->get('tb_schedule')->result_array();
        $this->load->view('schedule', $data);
    }
    function listMidterm()
    {
        $data['datamidterm'] = $this->Mdosen->getTablemidterm();
        $data['tb_midterm'] = $this->db->get('tb_midterm')->result_array();
        $this->load->view('midterm', $data);
    }
    function listFinalexam()
    {
        $data['datafinalexam'] = $this->Mdosen->getTablefinalexam();
        $data['tb_finalexam'] = $this->db->get('tb_finalexam')->result_array();
        $this->load->view('finalexam', $data);
    }
    function deleteschedule($id)
    {
        $this->Mdosen->deleteschedule($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete successfully!</div>');
        redirect('dosen/listSchedule');
    }
    function deletemidterm($id)
    {
        $this->Mdosen->deletemidterm($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete successfully!</div>');
        redirect('dosen/listMidterm');
    }
    function deletefinalexam($id)
    {
        $this->Mdosen->deletefinalexam($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete successfully!</div>');
        redirect('dosen/listFinalexam');
    }
    function addschedule()
    {
        $data['datamateri'] = $this->Mdosen->getTableschedule();
        $data['tb_schedule'] = $this->db->get('tb_schedule')->result_array();

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('tgl_mengajar', 'tgl_mengajar', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('addschedule', $data);
        } else {
            $data = [
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'tgl_mengajar' => $this->input->post('tgl_mengajar'),
                'kelas' => $this->input->post('kelas'),
            ];
            $this->db->insert('tb_schedule', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added successfully!</div>');
            redirect('dosen/listSchedule');
        }
    }
    function editschedule($id)
    {
        $data['dataschedule'] = $this->Mdosen->getTableeditschedule($id);

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('tgl_mengajar', 'tgl_mengajar', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('editschedule', $data);
        } else {
            $updatemateri = array(
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'tgl_mengajar' => $this->input->post('tgl_mengajar'),
                'kelas' => $this->input->post('kelas')
            );
            $this->db->where('id', $id);
            $this->db->update('tb_schedule', $updatemateri);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit successfully!</div>');
            redirect('dosen/listSchedule');
        }
    }
    function addmidterm()
    {
        $data['datamateri'] = $this->Mdosen->getTablemidterm();
        $data['tb_midterm'] = $this->db->get('tb_midterm')->result_array();

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('rentang_waktu', 'rentang_waktu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('addmidterm', $data);
        } else {
            $data = [
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'soal' => $this->input->post('soal'),
                'rentang_waktu' => $this->input->post('rentang_waktu'),
            ];
            $this->db->insert('tb_midterm', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added successfully!</div>');
            redirect('dosen/listMidterm');
        }
    }
    function editmidterm($id)
    {
        $data['datamidterm'] = $this->Mdosen->getTableeditmidterm($id);

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('rentang_waktu', 'rentang_waktu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('editmidterm', $data);
        } else {
            $updatemateri = array(
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'soal' => $this->input->post('soal'),
                'rentang_waktu' => $this->input->post('rentang_waktu')
            );
            $this->db->where('id', $id);
            $this->db->update('tb_midterm', $updatemateri);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit successfully!</div>');
            redirect('dosen/listMidterm');
        }
    }
    function addfinalexam()
    {
        $data['datafinalexam'] = $this->Mdosen->getTablefinalexam();
        $data['tb_finalexam'] = $this->db->get('tb_finalexam')->result_array();

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('rentang_waktu', 'rentang_waktu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('addfinalexam', $data);
        } else {
            $data = [
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'soal' => $this->input->post('soal'),
                'rentang_waktu' => $this->input->post('rentang_waktu'),
            ];
            $this->db->insert('tb_finalexam', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Added successfully!</div>');
            redirect('dosen/listFinalexam');
        }
    }
    function editfinalexam($id)
    {
        $data['datafinalexam'] = $this->Mdosen->getTableeditfinalexam($id);

        $this->form_validation->set_rules('kode_matkul', 'Kode_matkul', 'required');
        $this->form_validation->set_rules('nama_matkul', 'Nama_matkul', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('soal', 'Soal', 'required');
        $this->form_validation->set_rules('rentang_waktu', 'rentang_waktu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('editfinalexam', $data);
        } else {
            $updatemateri = array(
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'program_studi' => $this->input->post('program_studi'),
                'soal' => $this->input->post('soal'),
                'rentang_waktu' => $this->input->post('rentang_waktu')
            );
            $this->db->where('id', $id);
            $this->db->update('tb_finalexam', $updatemateri);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit successfully!</div>');
            redirect('dosen/listFinalexam');
        }
    }
}
