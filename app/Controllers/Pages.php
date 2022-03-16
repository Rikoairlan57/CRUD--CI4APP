<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Riko Airlan',
            'tes' => ['satu', 'dua', 'tiga'],
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'about me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl.blok duku no 21 ',
                    'kota' => 'jakarta timur'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Cibubur',
                    'kota' => 'jakarta timur'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}