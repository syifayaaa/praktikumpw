<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>