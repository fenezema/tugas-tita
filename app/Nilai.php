<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'matakuliah_id', 'mahasiswa_id', 'quiz', 'keaktifan','uts','uas',
    ];
    public function user()
    {
        $this->belongsTo('App\Matakuliah');
    }
    public function user()
    {
        $this->belongsTo('App\Matakuliah');
    }
}
