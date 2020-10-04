@extends('layouts.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rental</h1>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                @if($rental == null)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rental as $index=>$data)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $data->nama }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="card p-1 border-danger">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="float-left">
                                <p class="mb-0"><strong>Tidak ada data!!!</strong></p>
                                <p class="card-title">Silahkan tambah data!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
