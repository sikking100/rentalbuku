@extends('layouts.admin')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header py-3">
                Edit Data
                <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
