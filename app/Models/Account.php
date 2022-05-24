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
}
