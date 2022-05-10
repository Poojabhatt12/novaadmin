<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationHistory extends Model
{
    use HasFactory;
    protected $table = "education_history";
    protected $primaryKey = 'education_history_id';

public static function getStates(){
    return getStates();
}
public static function getYears(){
    return getYears();
}


}
