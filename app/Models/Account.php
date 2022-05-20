<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    
    // public function jobVerifieds()
    // {
    //     return $this->hasMany(JobVerified::class, 'account_id', 'account_id');
    // }
}
