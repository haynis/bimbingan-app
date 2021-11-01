@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Dosen</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Dosen</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $lecturer)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $lecturer->nama }}</td>
                        <td>{{ $lecturer->nidn }}</td>
                        <td>{{ $lecturer->alamat }}</td>
                        <td>{{ $lecturer->kontak }}</td>
                        <td class=" text-center">
                            <form action="{{ route('dosen.destroy',$lecturer->id) }}" method="POST" class=" d-inline">
                                <a class="badge bg-info text-decoration-none" title="View" href="{{ route('dosen.show',$lecturer->id) }}"><span data-feather="eye"></a>

                                <a class="badge bg-warning text-decoration-none" title="Edit" href="{{ route('dosen.edit',$lecturer->id) }}"><span data-feather="edit"></a>
            
                                @csrf
                                @method('DELETE')
            
                                <button type="submit" class="badge bg-danger border-0" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $dosen->links() !!}
@endsection
