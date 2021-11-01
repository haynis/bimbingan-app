@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Dosen</h1>
  </div>
  <div class="tools p-2 rounded-3">
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
  </div>
  <div class="col-lg-8">
    <form action="{{ route('dosen.update',$dosen->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $dosen->nama) }}" required autofocus>
          @error('nama')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="nidn" class="form-label">NIDN</label>
          <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn', $dosen->nidn) }}" required autofocus>
          @error('nidn')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" style="height:150px" name="alamat" required autofocus >{{ old('alamat', $dosen->alamat) }}</textarea>
          @error('alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="kontak" class="form-label">Kontak</label>
          <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" value="{{ old('kontak', $dosen->kontak) }}" required autofocus>
          @error('kontak')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update Data Dosen</button>
  </form>
  </div>
 


@endsection