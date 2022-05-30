<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    
    public function payPackages()
    {
        return $this->hasMany(PayPackage::class, 'account_id', 'id_account');
    }

    public static function getAccountStatus(){
    return getAccountStatus();
    }
    // public static function getAccountManager(){
    // return getAccountManager();
    // }

      public static function getTravelExperience(){
    return getAccountStatus();
    }
      public static function getTeachingHospital(){
    return getTeachingHospital();
    }
      public static function getTraumaLevel(){
    return getTraumaLevel();
    }
      public static function getHospitalBedSize(){
    return getHospitalBedSize();
    }
      public static function getBSNRequired(){
    return getBSNRequired();
    }
}
