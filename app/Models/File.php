<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'payment', 'screenshot'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function user()
    {
        return $this->belongsTo(Profile::class);
    }
}
