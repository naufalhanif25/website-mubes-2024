<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';

    //protected $primaryKey = 'npm';

    //public $incrementing = false;

    //protected $keyType = 'string';
    protected $fillable = [
        //'npm',
        'nama',
        'photo',
        'votes',
    ];

    public $timestamps = true;
}
