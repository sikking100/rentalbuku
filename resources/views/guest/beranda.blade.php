@extends('layouts.guest')

@section('content')
<section>
      <div class="row">
        <div class="col-6">
          Pilihan Umum <br>
          Karya Terbaik
        </div>
        <div class="col-6">
          <div class="float-right">
              <a href="{{ url('/allbook') }}" class="btn btn-success">Lihat Semua</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-2">
        <div class="row">
          @foreach($bestbook as $data)
          <div class="col-2">
            <img src="{{ asset('img/buku/'.$data->foto) }}" alt="" srcset="" class="img-fluid">
            <div class="cat">
                {{ $data->category->name }}
            </div>
            <div class="title">
                {{ $data->name }}
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
      </div>
    </section>

    <section>
      <div class="row">
        <div class="col-6">
          Rasakan Dunia Baru <br>
          Buku Yang Baru Terbit
          <hr>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magnam non voluptatem minus deleniti
          similique unde quod recusandae reiciendis nemo maxime provident sapiente soluta commodi suscipit, dolor,
          laudantium vero doloremque?
          <div class="button">
            <a href="{{ url('/allbook') }}" class="btn btn-success btn-block">Lihat Semua</a>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            @foreach($new as $data)
            <div class="col-4">
              <img src="{{ asset('img/buku/'.$data->foto) }}" alt="" srcset="" class="img-fluid">
              <div class="cat">
                {{ $data->category->name }}
              </div>
              <div class="title">
                {{ $data->name }}
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
        </div>
      </div>
    </section>

    <section>
      <div class="row">
        <div class="col-6">
          Beberapa Buku Terbaik <br>
          Pilihan Penulis
        </div>
        <div class="col-6">
          <div class="float-right">
            <a href="{{ url('/allbook') }}" class="btn btn-success">Lihat Semua</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        @foreach($newauthor as $data)
        <div class="col-4">
          <div class="wrap">
            <img src="{{ asset('img/buku/'.$data->foto) }}" alt="" srcset="" class="img-fluid">
            <hr>
            <div class="title">{{ $data->name }}</div>
            <div class="subtitle">Pengarang</div>
            <div class="button">
              <button class="btn btn-success btn-block">+ Keranjang</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
@endsection