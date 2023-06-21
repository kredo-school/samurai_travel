<?php

namespace App\Models;

use App\Console\Kernel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'keyword_id'
    ];

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
