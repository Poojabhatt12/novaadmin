<?php

namespace App\Models;

use App\Models\JobVerified;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobVerified extends Model
{
    use HasFactory;
    protected $table = 'job_verified';
    protected $primaryKey = 'id_job_verified';
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public static function getStates(){
        return getStates();
    }
    public static function getShiftCategories(){
        return getShiftCategories();
    }
    public static function  getClinicalUnits(){
        return getClinicalUnits();
    }
    public static function  getAssignmentDuration(){
        return getAssignmentDuration();
    }
    public static function  getstatus(){
        return getstatus();
    }
    public static function  getRateTypes(){
        return getRateTypes();
    }
    public static function getVmsNames(){
        return getVmsNames();
    }
    public function payPackages()
    {
        return $this->hasMany(PayPackage::class, 'job_id', 'id_job_verified');
    }
    public function submission()
    {
        return $this->hasMany(PayPackage::class, 'job_id', 'id_job_verified');
    }
}
