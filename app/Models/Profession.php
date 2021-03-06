<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'professions';
    protected $primaryKey = 'id';
    
     public function clinicalUnits()
    {
        return $this->hasMany(ClinicalUnit::class, 'profession_id');
    }
}
