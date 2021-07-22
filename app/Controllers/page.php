<?php 

namespace App\Controllers; 

class Page extends BaseController 
{ 
    public function about() 
    { 
        return view('about',[
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    } 
    public function contact() 
    { 
        return view('contact',[
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman contact.'
        ]);
    } 
    public function antrian() 
    { 
        return view('antrian',[
            'title' => 'Halaman Antrian',
            'content' => 'Ini adalah halaman antrian.'
        ]);
    }
    public function antrianbaru() 
    { 
        return view('antrianbaru',[
            'title' => 'Halaman Antrian Baru',
            'content' => 'Ini adalah halaman antrian baru.'
        ]);
    }
    public function faqs() 
    { 
        echo "Ini halaman FAQ"; 
    } 
    public function tos()
    {
        echo "Ini halaman Term of Services";
    }
} 
