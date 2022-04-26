<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casal extends Model
{
    protected $fillable = ['nom','data_inici','data_final','n_places','id_ciutat'];
    use HasFactory;
}
