<?php

namespace App\Controllers;

use App\Models\DataModel;

class Web extends BaseController
{
    public function beranda()
    {
        $model = new DataModel();
        $data = $model->getDataPraktikan();
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new DataModel();
        $data = $model->getProfil();
        return view('profil', $data);
    }
}
