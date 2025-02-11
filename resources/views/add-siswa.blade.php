@extends('partials.main')

@section('content')
    <h1>Form Tambah Data</h1>
    <form action="{{ Route('siswa.add.process') }}"method="post">
        @csrf
        <div class="row col-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">

                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" placeholder="Masukan Alamat">
            </div>

        </div>
        <div class="mt-">
            <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                <option selected>Masukan Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
                <option value="khusus">Khusus</option>
            </select>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>

    </form>
@endsection
