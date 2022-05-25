<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

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
    public function payPackages()
    {
        return $this->hasMany(PayPackage::class, 'customer_id', 'id_customer');
    }
    public function submission()
    {
        return $this->hasMany(Submission::class, 'customer_id', 'id_customer');
    }
    
}
