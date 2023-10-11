<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_user extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'user_id', 'total_price'];

    // العلاقة مع جدول "courses"
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // العلاقة مع جدول "users"
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
