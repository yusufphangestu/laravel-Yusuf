@extends('partials.main')
@section('content')

    <h1>Data siswa</h1>
    <div class="d-grid gap-2">
        <a href="{{Route('siswa.add')}}" class="btn btn-primary" type="button">TAMBAH DATA</a>
</div>
    <table class="table table-hover mt-3">
       

        <tr class="table-dark">
            
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Menu</th>
        </tr>
     
        @foreach ($siswa as $sw)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$sw['nama']}}</td>
            <td>{{$sw['alamat']}}</td>
            <td>{{$sw['jenis_kelamin']}}</td>
            <td>
                <form action="{{Route('siswa.delete', $sw['id'])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Hapus</button>
                    <a class="btn btn-warning"href="{{Route('siswa.edit',$sw['id'])}}">Edit</a>
                </form>

                </a>
            </td>
        </tr>
            
        @endforeach
        
    </table> 

@endsection
 
