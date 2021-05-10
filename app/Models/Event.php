<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;


    protected $fillable = [
   'author','title','description','date_from','date_to','time_start','time_end','venue','status','attendance_status','department',
];

}
