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

// public function clinical()
// {
//     return $this->belongsTo(ClinicalUnit::class,'clinical_unit','id_clinical_unit');
// }

}
