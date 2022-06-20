<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vms extends Model
{
    use HasFactory;
    protected $table = 'vms';
    protected $primaryKey = 'id';

    public function vms()
    {
        return $this->hasMany(Vms::class, 'vms_id', 'id');
    }
}
