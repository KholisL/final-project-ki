<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\KategoriBuku;
use DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['buku'] = Buku::get();
        return view('admin.buku.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = KategoriBuku::get();
       return view('admin.buku.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga = $request->harga;
        $buku->point_dibeli = $request->point_dibeli;
        $buku->point_membeli = $request->point_membeli;
        $buku->id_kategori_buku = $request->id_kategori;
        $buku->save();
        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $data['buku'] = Buku::find($id);
        $data['buku'] = KategoriBuku::getKategori($request->id);
        return view('admin.buku.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $data['buku'] = Buku::find($id);
       $data['buku'] = KategoriBuku::getKategori($id);
       // dd($data['buku']);
       $data['kategori'] = KategoriBuku::get();
       return view('admin.buku.edit',$data);
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
        $buku= Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga = $request->harga;
        $buku->point_dibeli = $request->point_dibeli;
        $buku->point_membeli = $request->point_membeli;
        $buku->id_kategori_buku = $request->id_kategori;
        $buku->update();
        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id)->delete();
        return redirect('buku');
    }
}
