<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function specialite(){

        return $this->belongesTo(specialite::class);
                    
                                                }  
    use HasFactory;
}
