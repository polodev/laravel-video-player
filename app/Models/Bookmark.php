<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function videos()
    {
        return $this->belongsTo(Video::class, 'bookmark_video');
    }
}
