<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "M. Ramandha Kurniawan Batubara";
    protected $foto = "IMG.jpg";
    protected $nim = "2110817310007";
    protected $prodi = "Teknologi Informasi";
    protected $hobi = "Membaca Novel, Mendengarkan Musik dan Bermain Game";
    protected $skill = "Membaca Cepat";
    protected $motivasi = "Ingin melanjutkan jurusan dari SMK dan menghasilkan uang yang banyak agar orang tua dapat bersantai di hari tua";

    public function getNama(){
        return $this->nama;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getProdi(){
        return $this->prodi;
    }
    public function getHobi(){
        return $this->hobi;
    }
    public function getSkill(){
        return $this->skill;
    }
    public function getMotivasi(){
        return $this->motivasi;
    }
}