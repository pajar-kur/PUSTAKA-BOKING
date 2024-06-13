<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang.. Selamat belajar web programming";
    }

    public function penjumlahan($nil1, $nil2)
    {
        /*$this->load->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "Hasil penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;*/

        $this->load->model('model_latihan1');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->model_latihan1->jumlah($nil1, $nil2);
        
        $this->load->view('view_latihan1', $data);
    }

}