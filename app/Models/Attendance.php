<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
   'author','title','department','time_start','time_end','attendee','attendee_attendance_status','in_or_out','venue','duration',
];

}
