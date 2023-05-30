<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        return view('index', ["nama" => $mahasiswa->getNama(), "nim" => $mahasiswa->getNim(),
        ]);
    }
    public function biodataMahasiswa()
    {
        $mahasiswa = new MahasiswaModel();
        return view('biodataMahasiswa', ["nama" => $mahasiswa->getNama(), "nim" => $mahasiswa->getNim(), "skill" => $mahasiswa->getSkill(),
            "prodi" => $mahasiswa->getProdi(), "hobi" => $mahasiswa->getHobi(), "foto" => $mahasiswa->getFoto(), "motivasi" => $mahasiswa->getMotivasi()
        ]);
    }
}