@extends('layouts.admin')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Buku</h1>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header py-3">
                Tambah Data
                <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id_categories">Kategori</label>
                        <select name="id_categories" id="id_categories" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($category as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Buku</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>


                    <div class="form-group" id="tampilan">
                        <label for="galeri" id="labelgambar">Gambar: </label>
                        <div id="preview"></div>
                        <input type="file" class="form-control-file" name="foto" id="gambar">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
