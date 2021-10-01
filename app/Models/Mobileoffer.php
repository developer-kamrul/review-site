<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobileoffer extends Model
{
    use HasFactory;

    protected $table = "mobileoffers";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}
