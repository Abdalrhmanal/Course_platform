<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','img','description', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    // Define relationships
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
