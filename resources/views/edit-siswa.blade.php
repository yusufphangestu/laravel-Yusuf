@extends('partials.main')

@section('content')
    <h1>Form Edit Data</h1>
    <form action="{{ Route('siswa.update', $data) }}"method="post">
        @csrf
        @method('PUT')
        <div class="row col-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukan Nama" name="nama" value="{{$data['nama']}}">
            </div>
            <div class="mb-3">

                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" placeholder="Masukan Alamat" alamat="alamat" value="{{$data['alamat']}}">
            </div>

        </div>
        <div class="mt-">
            <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                <option selected>Masukan Jenis Kelamin</option>
                <option value="laki-laki"{{$data['jenis_kelamin']=="laki-laki"?'selected':''}}>Laki-Laki</option>
                <option value="perempuan"{{$data['jenis_kelamin']=="perempuan"?'selected':''}}>Perempuan</option>
                <option value="khusus"{{$data['jenis_kelamin']=="khusus"?'selected':''}}>Khusus</option>
            </select>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Edit</button>
        </div>

    </form>
@endsection
