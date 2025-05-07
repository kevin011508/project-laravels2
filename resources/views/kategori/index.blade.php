
@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Daftar Kategori</h4>
    <div class="ms-auto">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>
</div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $no => $kategori)
            <tr>
                <td>{{ $no + 1}}</td>
                <td>{{ $kategori->nama_kategori}}</td>
                <td>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                        <a href="{{route ('kategori.edit', $kategori->id) }}" class="btn btn-primary">edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection