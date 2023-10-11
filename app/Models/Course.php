<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'teacher_id', 'description', 'price'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users', 'course_id', 'user_id')
                    ->withPivot('total_price')
                    ->withTimestamps();
    }
    // Course.php

// public function users()
// {
//     return $this->belongsToMany(User::class)->withPivot('price');
// }



    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
