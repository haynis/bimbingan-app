@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">Show Data Dosen</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <p>
                             <h5> <b> Nama: </b> {{ $dosen->nama }}</h5> 
                          </p> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5> <b> NIDN:</b> {{ $dosen->nidn }}</h5> 
                             </p>                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Alamat: </b> {{ $dosen->alamat }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p>
                                <h5><b>Kontak: </b> {{ $dosen->kontak }}</h5>
                            </p>
                        </div>
                    </div>
                    <div class="tools p-2 rounded-3">
                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary mb-3"><span data-feather="arrow-left"></span> Kembali</a>
                      </div>
                </div>
        </div>
    </div>
</div>
@endsection

