<?php
namespace App\Controllers;
use App\Models\AntrianModel;
class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Antrian';
        $model = new AntrianModel();
        $antrian = $model->findAll();
    }

    public function add() 
    { 
        // validasi data. 
        $validation = \Config\Services::validation(); 
        $validation->setRules(['nama' => 'required']); 
        $isDataValid = $validation->withRequest($this->request)->run(); 
        
        if ($isDataValid) 
        { 
            $artikel = new AntrianModel(); 
            $artikel->insert([ 
                'nama' => $this->request->getPost('nama'), 
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'), 
                'pekerjaan' => $this->request->getPost('pekerjaan'), 
                'nomor_antrian' => $this->request->getPost('nomor_antrian'), 
                'loket' => $this->request->getPost('loket'), 
                'slug' => url_title($this->request->getPost('judul')), 
            ]); 
            return redirect('antrian'); 
        } 
        $title = "Buat Antrian Baru"; 
        return view('antrian/antrianbaru', compact('title')); 
        }
}