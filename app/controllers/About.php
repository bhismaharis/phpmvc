<?php

class About extends Controller{
    public function index($nama = 'Bhisma', $pekerjaan = 'Mahasiswa', $umur = 20) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About Me';
        $this->view('templates/header' , $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['title'] = 'Pages';
        $this->view('templates/header' , $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}