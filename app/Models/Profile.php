<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['member_id', 'fullname', 'student_number', 'batch', 'faculty', 'major', 'phone', 'line_id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function file()
    {
        return $this->hasOne(File::class);
    }
}
