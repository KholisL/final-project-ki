<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Buku;

class KategoriBuku extends Model
{
    use HasFactory;

    protected $table = 'kategori_buku';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function getKategori($id){
    	return DB::table('buku')
    	->join('kategori_buku','kategori_buku.id','=','buku.id_kategori_buku')
    	->select('buku.id','buku.judul','buku.penulis','buku.penerbit','buku.tahun','buku.stok','buku.harga','buku.point_dibeli','buku.point_membeli','kategori_buku.id as id_kategori','kategori_buku.kategori_buku')
    	->where('buku.id',$id)
    	->first();

    	// dd($data);

    }
}
