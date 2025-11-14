<?php

class About {
    public function index($nama = 'Anonim', $status = 'user') {
        echo "nama saya adalah $nama, saya adalah seorang $status";
    }

    public function page() {
        echo "about/page";
    }
}
