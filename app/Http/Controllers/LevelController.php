<?php

namespace App\Http\Controllers;
use illuminate\Http\controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode,level_nama,created_at) values(?,?,?)',['CUS','pelanggan',now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_level set level_nama =? where level_kode =?',['customer','CUS']);
        // return 'update data berhasil. JUmlah data yang diupdate: '.$row.'baris';

        // $row = DB::delete('delete from m_level where level_kode = ?',['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row.'baris';

    //     $data = DB::select('select * from m_level');
    //     return view('level',['data' => $data]);
    }
}
