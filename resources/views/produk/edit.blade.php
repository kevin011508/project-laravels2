@extends('layout')


@section('konten')
  <div class="container-fluid px-4">
    <h4 class="mt-4">Edit Produk</h4>
    <div class="mb-4"></div>
    <form action="{{ route('produk.update', $produk->id) }}" method="post" class="row g-3 mt-3" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card shadow bg-white">
        <div class="card-header">
            <strong>Isi Data Produk</strong>
        </div>
        <div class="card-body">

          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Nama Produk:</label>
            <div class="col-sm-9">
              <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" placeholder="Nama Produk" required>
            </div>
          </div>
          
          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Dekripsi:</label>
            <div class="col-sm-9">
              <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" rows="4" required>{{ $produk->deskripsi }}</textarea>
            </div>
          </div>
          
          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Harga:</label>
            <div class="col-sm-9">
              <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" placeholder="Harga" required>
            </div>
          </div>
          
          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Stok:</label>
            <div class="col-sm-9">
              <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control" placeholder="Stok" required>
            </div>
          </div>
          
          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Gambar saat ini:</label>
            <div class="col-sm-9">
              <img src="{{ asset('uploads/' . $produk->nama_file) }}" alt="Gambar Produk" style="width: 200px; height: auto;">
            </div>
          </div>

          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Ganti Gambar:</label>
            <div class="col-sm-9">
              <input type="file" name="nama_file" class="form-control">
              <input type="hidden" name="old_file" value="{{ $produk->nama_file }}">
            </div>
          </div>
          
          <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label">Kategori:</label>
            <div class="col-sm-9">
              <select name="kategori_id" id="kategori_id" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $kategori)
                <option value="{{ $kategori->id }}" {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}>
                  {{ $kategori->nama_kategori }}
                </option>
                @endforeach
              </select>
            </div>
          </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-sm btn-primary btn-edit">
                    <i class="bi bi-check-square"></i> Edit
                  </button>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ url('/produk') }}" class="btn btn-sm btn-success">&laquo; Kembali</a>
                </div>
            </div>
        </div>
      </div>
    </form>
  </div>
@endsection