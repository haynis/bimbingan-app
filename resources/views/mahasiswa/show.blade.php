@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">Show Data Mahasiswa</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <p>
                             <h5> <b> Nama: </b> {{ $mahasiswa->nama }}</h5> 
                          </p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5> <b> NIM:</b> {{ $mahasiswa->nim }}</h5> 
                             </p>                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Tanggal Lahir: </b> {{ $mahasiswa->tanggal_lahir }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Tahun Masuk: </b> {{ $mahasiswa->tahun_masuk }}</h5>
                            </p>              
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Alamat: </b> {{ $mahasiswa->alamat }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="tools p-2 rounded-3">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
                      </div>
                </div>
        </div>
    </div>
</div>
@endsection
