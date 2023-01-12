<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function getStokNew() {
    	$stok = g('stok_buku');
    	$stokNew = $stok + g('stok_masuk');
    	dd($stokNew);

    	return $stokNew;
    }
}
