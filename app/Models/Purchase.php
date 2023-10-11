<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'user_id', 'total_price'];

    public function course()
    {
        return $this->belongsTo(Course::class ,'course_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
