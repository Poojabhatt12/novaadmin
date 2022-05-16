<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalCertification extends Model
{
    use HasFactory;
    protected $table = 'clinical_certification';
    protected $primaryKey = 'id_clinical_certification';
   
public function customer()
    {
    return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

public function certifications()
  {
    return $this->belongsTo(Certifications::class, 'id_certification', 'id_certifications');
   }


}
