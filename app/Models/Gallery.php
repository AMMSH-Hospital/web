<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery'; // Table name is singular based on migration 'create_gallery_table' which creates 'gallery' table
    protected $guarded = [];
}
