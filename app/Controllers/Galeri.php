<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class Galeri extends BaseController
{
    public function index()
    {
        $model = new GaleriModel();

        $data['galeri'] = $model->findAll();

        return view('galeri/index', $data);
    }
}