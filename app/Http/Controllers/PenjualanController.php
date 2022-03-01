<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Models\Detailpenjualan;
use App\Models\Buku;
use App\Models\Members;
use App\Models\Penjualan;
use App\Models\Restok;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function idPenjualan() 
    {
    	$id = DB::table('penjualan')->orderBy('id','desc')->pluck('id')->first();
    	$id_penjualan = $id + 1;
    	return $id_penjualan;
    }

    public function index()
    {
        if(g('q'))
        {
            $data['query'] = DB::table('detail_penjualan')
            ->join('buku','buku.id','=','detail_penjualan.id_buku')
            ->join('penjualan','penjualan.id','=','detail_penjualan.id_penjualan')
            ->select('penjualan.id as id_penjualan','penjualan.nama_pembeli','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','detail_penjualan.sub_point_belanja','penjualan.bayar','buku.judul','detail_penjualan.created_at')
            ->where('nama_pembeli','like','%'.g('q').'%')->get();
        }else{
            $data['query'] = DB::table('detail_penjualan')
            ->join('buku','buku.id','=','detail_penjualan.id_buku')
            ->join('penjualan','penjualan.id','=','detail_penjualan.id_penjualan')
            ->select('penjualan.id as id_penjualan','penjualan.nama_pembeli','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','detail_penjualan.sub_point_belanja','penjualan.bayar','buku.judul','detail_penjualan.created_at')->get();
        }
        return view('admin.penjualan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['nomat'] = self::idPenjualan();
        // $data['waktu'] = self::waktu();
        
        return view('admin.penjualan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['nama'] = Penjualan::where('id',$id)->pluck('nama_pembeli')->first();
       $data['dataa'] = DB::table('detail_penjualan')
            ->join('buku','buku.id','=','detail_penjualan.id_buku')
            ->join('penjualan','penjualan.id','=','detail_penjualan.id_penjualan')
            ->select('penjualan.id as id_penjualan','penjualan.nama_pembeli','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','detail_penjualan.sub_point_belanja','penjualan.bayar','buku.judul','detail_penjualan.created_at','penjualan.total','penjualan.point_belanja')
            ->where('id_penjualan',$id)->get();

        // $data = Penjualan::find($id);
            // dd($data['query']);
        return view('admin.penjualan.detail',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id)->delete();
        return redirect('penjualan');
    }

    public function cari()
    {
        $id = Request::get('id');
        if ($id=='') {
            $data['val']    = 2;
        }else{
            $isi = Members::where('id','=', $id)->first();
            if (empty($isi)) {
                $data['val']    = 0;
            }else{
                $data['val']    = 1;
                $data['data']    = $isi;
            }
        }
        return response($data);
    }

    public function carii()
    {
        $id = Request::get('judul');
        if ($id=='') {
            $data['val']    = 2;
        }else{
            $isi = Buku::where('judul','=', $id)->first();
            if (empty($isi)) {
                $data['val']    = 0;
            }else{
                $data['val']    = 1;
                $data['data']    = $isi;
            }
        }
        return response($data);
    }

    public function simpan_transaksi(){

        $new = new Penjualan;
        $new->id_member        	= g('id');
        $new->nama_pembeli      = g('nama');
        $new->total             = g('total');
        $new->bayar             = g('bayar');
        $new->point_belanja     = g('total_point');
        $new->created_at        = date('Y-m-d H:i:s');

        $act = $new->save();

        $data = Members::find(g('id'));
        if($data != null){

            $point_total = $data->point+g('total_point');
            $data->point = $point_total;

            $data->update();
        }

        if ($act){

            $id_buku = g('dt_id_buku');
            $jumlah_beli = g('dt_jumlah_beli');
            $sub_total = g('dt_sub_total');
            $sub_point = g('dt_sub_point');
            $sisa_stok = g('dt_ss_stok');

            foreach ($id_buku as $id => $key) {
                $baru = new Detailpenjualan;
                $baru->id_penjualan = g('id_penjualan');
                $baru->id_buku = $id_buku[$id];
                $baru->jumlah_beli = $jumlah_beli[$id];
                $baru->sub_total = $sub_total[$id];
                $baru->sub_point_belanja = $sub_point[$id];
                $detail = $baru->save();


                $update['stok'] = $sisa_stok[$id];
                DB::table('buku')->where('id', $id_buku[$id])->update($update);

                $id++;
            }

            $data['query'] = DB::table('detail_penjualan')
                ->join('buku','buku.id','=','detail_penjualan.id_buku')
                ->join('penjualan','penjualan.id','=','detail_penjualan.id_penjualan')
                ->select('penjualan.id as id_penjualan','penjualan.nama_pembeli','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','detail_penjualan.sub_point_belanja','penjualan.bayar','buku.judul','buku.harga','penjualan.created_at')

                ->where('penjualan.id',g('id_penjualan'))

                ->get();

            return view('admin.penjualan.struk', $data);
        }
    }

    // public function cetakStruk()
    // {
    	
    //         return view('admin.penjualan.struk',$data);
    // }
}
