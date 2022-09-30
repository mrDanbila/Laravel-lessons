<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnails;

class Posts extends Model
{
    use HasFactory;

    public function thumbnail()
    {
        return $this->hasOne(Thumbnails::class, 'post_id', 'id');
    }	
}
