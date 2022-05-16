<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalUnit extends Model
{
    use HasFactory;
    protected $table = 'clinical_unit';
    protected $primaryKey = 'id_clinical_unit';
  
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
    
}
