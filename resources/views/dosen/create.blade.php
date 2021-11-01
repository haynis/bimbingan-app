@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Dosen</h1>
  </div>
  <div class="tools p-2 rounded-3">
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
  </div>
  <div class="col-lg-8">
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Nama Dosen" required autofocus>
          @error('nama')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="nidn" class="form-label">NIDN</label>
          <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn') }}" placeholder="NIDN" required autofocus>
          @error('nidn')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" style="height:150px" name="alamat" placeholder="Alamat" id="alamat" name="alamat" value="{{ old('alamat') }}" required autofocus></textarea>
          @error('alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="kontak" class="form-label">Kontak</label>
          <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" value="{{ old('kontak') }}" placeholder="Kontak" required autofocus>
          @error('kontak')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
     
      <button type="submit" class="btn btn-primary">Tambah Data Dosen</button>
  </form>
  </div>
 

@endsection
