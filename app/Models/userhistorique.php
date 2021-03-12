<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userhistorique extends Model
{
    use HasFactory;

    protected $fillable = ['opiration','compteEmail'];

    public function user(){
    return $this->belongsTo(user::class);
    }
}
