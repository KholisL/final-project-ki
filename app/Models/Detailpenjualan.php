<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function penjualan()
    {
    	return $this->belongsTo('App\Models\Penjualan','id');
    }

    public function buku()
    {
    	return $this->hasMany('App\Models\Buku','id');
    }
}
