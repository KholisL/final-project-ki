<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id';
    public $timestamps = false;

    

    // public function sisaStok($id_buku)
    // {
    // 	$stok = Buku::where('id',$id_buku)->get();
    // }

}