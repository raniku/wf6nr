<?php

namespace App\Controllers;

class BelajarWeb extends BaseController
{
    public function coba()
    {
        $data = [
            'title' => 'Latihan Web',
            'pesan' => 'Ramadhan Kareem',
        ];

        return view('latihan', $data);
    }
}
