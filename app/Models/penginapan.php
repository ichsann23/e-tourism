<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penginapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',  'nama', 'link', 'nohp', 'harga', 'fasilitas', 'ulasan', 'alamat', 'foto'
    ];
}
