<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Tambahkan jika Anda menggunakan Factory untuk testing atau seeding.

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = ['title', 'content'];
}
