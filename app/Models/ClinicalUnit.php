<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalUnit extends Model
{
    use HasFactory;
    protected $table = 'clinical_unit';
    protected $primaryKey = 'id_clinical_unit';

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }
    public function payPackages()
    {
        return $this->hasMany(PayPackage::class, 'clinical_unit', 'id_clinical_unit');
    }
  
}
