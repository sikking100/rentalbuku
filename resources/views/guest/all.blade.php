@extends('layouts.guest')

@section('content')
<section>
    Semua Buku
    <hr>
    <div class="row">
        @foreach($books as $book)
        <div class="col-2 mt-5">
            <img src="{{ asset('img/buku/'.$book->foto) }}" alt="" srcset="" class="img-fluid">
            <div class="cat">
                {{ $book->category->name }}
            </div>
            <div class="title">
                {{ $book->name }}
            </div>
            <div class="subtitle">
                Pengarang
            </div>
            <div class="button">
                <button class="btn btn-success btn-block">+ Keranjang</button>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
