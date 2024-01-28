<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
    public function docteur(){

        return $this->belongesTo(Doctor::class);
                    
                                                }  
    use HasFactory;
}
