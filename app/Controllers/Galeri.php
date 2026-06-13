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

    public function create()
    {
        return view('galeri/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul' => 'required',
            'gambar' => [
                'rules' => 'uploaded[gambar]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'mime_in' => 'Format harus JPG atau PNG'
                ]
            ]
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('gambar');

        $namaBaru = $file->getRandomName();

        $file->move('assets/img/upload', $namaBaru);

        $model = new GaleriModel();

        $model->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namaBaru
        ]);

        return redirect()->to('/galeri');
    }
}