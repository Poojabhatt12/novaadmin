<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    protected $fillable = ['account_manager'];
    
    public function payPackages()
    {
        return $this->hasMany(PayPackage::class, 'account_id', 'id_account');
    }
    
      public static function getAccountStatus(){
           return getAccountStatus();
      }
     
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

      public static function getRegionalAccount()
      {
          $regionalAccount = Account::where('type','R')->get()->pluck('account_name','id_account')->toarray();
            return $regionalAccount;
      }

      public static function getParentAccount()
      {
          $parentAccount = Account::where('type','P')->get()->pluck('account_name','id_account')->toarray();
          return $parentAccount;
      }
      public static function getAccounts()
      {
          $account = Account::where('type','A')->get()->pluck('account_name','id_account')->toarray();
          return $account;
      }
        
}
