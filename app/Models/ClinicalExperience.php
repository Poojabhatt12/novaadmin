<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalExperience extends Model
{
    use HasFactory;
    protected $table = 'clinical_experience';
    protected $primaryKey = 'id_experience';

    public function customer()
    {
       return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
    // public function clinicalUnit()
    // {
    //    return $this->belongsTo(ClinicalUnit::class, 'id_customer', 'id_customer');
    // }
}
