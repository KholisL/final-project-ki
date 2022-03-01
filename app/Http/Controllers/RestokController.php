<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Restok;
use DB;

class RestokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(g('q') == '') {
            $data['stok'] = Buku::get();
        }else{

            //error judul undified
            $data['stok'] = Buku::where('judul','like','%'.g('q').'%')->get();
        }
        return view('admin.restok.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data['buku'] = Buku::find($id);
        return view('admin.restok.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['buku'] = Buku::find($id);

       return view('admin.restok.edit',$data);
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
        $buku = Buku::find($id);
        $buku->stok = g('stok');
        $buku->update();
        return redirect('restok');
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
        return redirect('restok');
    }

    // public function search() {
    //     $judul = g('q');

    //     if($judul != '') {
    //         return Buku::where('judul','like','%'.$judul.'%')->get();
    //     }


    // }

}
