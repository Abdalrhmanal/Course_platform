<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'video_link', 'course_id', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
