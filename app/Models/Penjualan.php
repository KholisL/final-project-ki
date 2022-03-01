<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function detail_penjualan()
    {
    	return $this->hasMany('App\Models\Detailpenjualan','id');
    }
    public function member()
    {
    	return $this->hasMany('App\Models\Members','id');
    }
}
