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

        $validated=$request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required'
        ],[
            'nama.required'=>"kolom iki kudu diisi asuu",
            'alamat.required'=>"kolom iki kudu diisi asuu",
            'jenis_kelamin.required'=>"kolom iki kudu diisi asuu"
        ]);
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
        // menemukan data siswa berdasarkan id
        $data=Student::find($id);

        // menghapus data siswa berdasarkan id yang ditemukan
        $data->delete();

        // mengarahkan kembali ke halaman siswa setelah berhasil menghapus data
        return redirect()->route('siswa');
    }

    public function edit($id)
    {
        // menemukan data siswa berdasarkan id
        $data=Student::findOrFail($id);

        // mengarahkan kembali ke halaman siswa setelah berhasil mengirim data
        return view('edit-siswa', compact('data'));
    }

    public function update(Request$request,$id)
    {
        // menemukan data siswa berdasarkan id
        $data=Student::findOrFail($id);

        // mengupdate data siswa berdasarkan id yng ditemukan
        $data->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin
        ]);

        // mengarahkan kembali ke halaman siswa setelah berhasil mengupdate data
        return redirect()->route('siswa');
    }


}
