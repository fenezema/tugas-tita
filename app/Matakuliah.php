<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    //
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'kode_mk', 'dosen_id', 'nama_mk', 'jumlah_sks',
    ];
    public function user()
    {
        $this->belongsTo('App\User');
    }
    public function dosen()
    {
        $this->belongsTo('App\Dosen');
    }
    public function nilai()
    {
        $this->hasMany('App\Nilai');
    }
}
