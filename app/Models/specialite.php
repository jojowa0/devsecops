<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    public function docteur(){

        return $this->hasMany(Doctor::class);

                            }
    use HasFactory;
}
