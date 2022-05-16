<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    public function educationHistories()
    {
        return $this->hasMany(EducationHistory::class, 'id_customer', 'id_customer');
    }

    public function nursingLicenses()
    {
        return $this->hasMany(License::class, 'id_customer', 'id_customer');
    }
    public function clinicalCertifications()
    {
        return $this->hasMany(ClinicalCertification::class, 'id_customer', 'id_customer');
    }
    public function clinicalExperiences()
    {
        return $this->hasMany(ClinicalExperience::class, 'id_customer', 'id_customer');
    }
    // public function clinicalUnits()
    // {
    //     return $this->hasMany(ClinicalExperience::class, 'id_customer', 'id_customer');
    // }
    
}
