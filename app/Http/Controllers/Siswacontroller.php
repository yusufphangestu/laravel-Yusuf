<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Siswacontroller extends Controller
{
    public function index()
    {
        $siswa = Student::all();

        // $siswa = [
        //     [
        //         'nama' => 'yusuf',
        //         'alamat' => 'banyuwangi',
        //         'jenis_kelamin' => 'laki-laki'
        //     ],
        //     [
        //         'nama' => 'sisi',
        //         'alamat' => 'saranjana',
        //         'jenis_kelamin' => 'perempuan'
        //     ],
        //     [
        //         'nama' => 'rohim',
        //         'alamat' => 'songgon',
        //         'jenis_kelamin' => 'Laki-Laki'
        //     ],
        //     [
        //         'nama' => 'shaka',
        //         'alamat' => 'Singojuruh',
        //         'jenis_kelamin' => 'Laki-Laki'
        //     ],
        // ];
        
        return view('siswa', compact('siswa')); 
    }

    public function add (){
        return view ('add-siswa');
    }

    public function store (Request$request)
    {
        // untuk menyimpan data siswa
        // data yang disimpan adalah nama, alamat, dan jenis kelamin
        $data=Student::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin
        ]);

        // mengarahkan kembali ke halaman siswa setelah berhasil menyimpan data
        return redirect()->route('siswa');

    }

    public function destroy($id)
    {
        // menemukan siswa berdasarkan id
        $data=Student::find($id);

        // menghapus siswa berdasarkan id yang ditemukan
        $data->delete();

        // mengarahkan kembali ke halaman siswa setelah berhasil menghapus data
        return redirect()->route('siswa');
    }

}
