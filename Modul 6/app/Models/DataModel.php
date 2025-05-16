<?php

namespace App\Models;

class DataModel
{
    public function getDataPraktikan()
    {
        return [
            'nama' => 'Abdurrahman Gilang Harjuna',
            'nim'  => '2310817110004'
        ];
    }

    public function getProfil()
    {
        return [
            'nama'   => 'Abdurrahman Gilang Harjuna',
            'nim'    => '2310817110004',
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Calisthenics, Ngoding wkwkwk',
            'skill'  => 'Front Lever, HTML, CSS, PHP',
            'desc'   => 'Aku orang yang sangat suka olahraga mulai dari workout, gym, lari, dan calisthenic.',
            'gambar' => 'Junn.jpg'
        ];
    }
}
