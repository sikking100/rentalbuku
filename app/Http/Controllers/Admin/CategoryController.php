<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.kategori.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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

            Category::create($input);

            alert()->success('Berhasil!!!', 'Data Berhasil Disimpan!!!');

            return redirect('admin/category');
       } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
       }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.kategori.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {
            $input = $request->all();

            $category->update($input);

            alert()->success('Berhasil!!!', 'Data Berhasil Diubah!!!');

            return redirect('admin/category');
       } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {

            $category->delete();

            alert()->success('Berhasil!!!', 'Data Berhasil Dihapus!!!');

            return redirect('admin/category');
       } catch (\Throwable $th) {
            alert()->error('Gagal!!!', 'Terjadi kesalahan!!!' . $th->getMessage());

            return redirect()->back();
       }
    }
}
