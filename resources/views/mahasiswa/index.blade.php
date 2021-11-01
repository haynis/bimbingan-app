@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Mahasiswa</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $student)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->tanggal_lahir }}</td>
                        <td>{{ $student->tahun_masuk }}</td>
                        <td>{{ $student->alamat }}</td>
                        <td class=" text-center">
                            <form action="{{ route('mahasiswa.destroy',$student->id) }}" method="POST" class=" d-inline">
                                <a class="badge bg-info text-decoration-none" title="View" href="{{ route('mahasiswa.show',$student->id) }}"><span data-feather="eye"></a>

                                <a class="badge bg-warning text-decoration-none" title="Edit" href="{{ route('mahasiswa.edit',$student->id) }}"><span data-feather="edit"></a>
            
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
    {!! $mahasiswa->links() !!}
@endsection




