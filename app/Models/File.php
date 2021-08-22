<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id', 'payment', 'screenshot'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
