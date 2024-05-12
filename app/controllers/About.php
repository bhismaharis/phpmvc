<?php

class About {
    public function index($nama = 'Bhisma', $pekerjaan = 'Mahasiswa SI') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}