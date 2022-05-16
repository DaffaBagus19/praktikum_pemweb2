<?php
class Mahasiswa_model extends CI_Model
{
    // buat property atau variabel
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tgl_lahir;
    public $tmp_lahir;
    public $prodi;
    public $ipk;

    public function predikat()
    {
        if ($this->ipk < 2.50) {
            return "kurang";
        } elseif ($this->ipk < 3.00) {
            return "cukup";
        } elseif ($this->ipk < 3.75) {
            return "baik";
        } elseif ($this->ipk >= 3.75) {
            return "cumlaude";
        } else {
            return "default";
        }
    }
}

