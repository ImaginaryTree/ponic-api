<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hydroModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    //protected $dateFormat = 'Y-m-d';
    protected $table = 'hydro_ctrl';
    protected $fillable = [
        'pompa',
        'min_ph',
        'max_ph',
        'min_ppm',
        'max_ppm',
        'time_of',
        'time_on',
        'planting_date'
    ];
    protected $hidden = [];

}
