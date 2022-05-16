<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $table = 'nursing_license';
    protected $primaryKey = 'license_id';
    public function customer()
{
    return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
}
}
