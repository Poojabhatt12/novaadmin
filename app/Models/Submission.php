<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'submission';
    protected $primaryKey = 'submission_id';

    public static function getStatus(){
        return getStatus();
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id_customer');
    }
    public function jobVerified()
    {
        return $this->belongsTo(JobVerified::class, 'job_id', 'id_job_verified');
    }
    public function payPackage()
    {
        return $this->belongsTo(PayPackage::class, 'package_id', 'package_id');
    }
}
