<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productmain;
class ProductmainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productmain = Productmain::all();
        return view('productmains.productmain', ['posts'=>$productmain]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productmains.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'image' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            Productmain::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('productmains.index')
            ->with('success', 'produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productmain = Productmain::find($id);
        return view('productmains.edit', compact('productmain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'image' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
            Productmain::find($id)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('productmains.index')
            ->with('success', 'produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Productmain::find($id)->delete();
        return redirect()->route('productmains.index')
        -> with('success', 'produk Berhasil Dihapus');
    }
}
