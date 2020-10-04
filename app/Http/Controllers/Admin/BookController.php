<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Upload;

class BookController extends Controller
{
    public function __construct()
    {
        $this->upload = new Upload();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('admin.buku.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();

            if ($request->hasFile('foto')) {
                $input['foto'] = $this->upload->uploadGambar($request, 'buku', 'foto');
            }

            Book::create($input);

            alert()->success('Berhasil!!!', 'Data Berhasil Disimpan!!!');

            return redirect('admin/books');
        } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.buku.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        try {
            $input = $request->all();

            if ($request->hasFile('foto')) {
                $this->upload->hapusGambar($book, 'buku', 'foto');
                $input['foto'] = $this->upload->uploadGambar($request, 'buku', 'foto');
            }

            $book->update($input);

            alert()->success('Berhasil!!!', 'Data Berhasil Diubah!!!');

            return redirect('admin/books');
        } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        try {

            $this->upload->hapusGambar($book, 'buku', 'foto');

            $book->delete();

            alert()->success('Berhasil!!!', 'Data Berhasil Dihapus!!!');

            return redirect('admin/books');
        } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
        }
    }
}
