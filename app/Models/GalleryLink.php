<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryLink extends Model
{
    use HasFactory;

    protected $fillable = [
   'author','event','description','duration','time','venue','link','college'
];
}
