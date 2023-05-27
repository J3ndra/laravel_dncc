<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index($id)
    {
        $id = $id;
        $nama = 'Endra';
        $umur = 17;
        $alamat = 'Semarang';
        return view('biodata', [
            'id' => $id,
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat,
        ]);
    }
}
