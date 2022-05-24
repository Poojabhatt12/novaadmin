<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayPackage extends Model
{
    use HasFactory;
    protected $table = 'pay_package';
    protected $primaryKey = 'package_id';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id_customer');
    }
    public function jobVerified()
    {
        return $this->belongsTo(JobVerified::class, 'job_id', 'id_job_verified');
    }
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id_account');
    }
    public function clinicalUnit()
    {
        return $this->belongsTo(ClinicalUnit::class, 'clinical_unit', 'id_clinical_unit');
    }
    public function submission()
    {
        return $this->belongsTo(Submission::class, 'package_id', 'package_id');
    }
}
