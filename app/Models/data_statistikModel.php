<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class data_statistikModel extends Model
{
    use HasFactory;
    //public $timestamps = false;
    //protected $dateFormat = 'Y-m-d';
    protected $table = 'data_statistik';
    protected $fillable = [
        'ppm',
        'suhu',
        'v_air',
        'ph'
    ];
    protected $hidden = [];
}
