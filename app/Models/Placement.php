<?php

namespace App\Models;


use App\Models\Customer;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Placement extends Model
{
    use HasFactory;
    protected $table = 'placement';
    protected $primaryKey = 'placement_id';
    protected $fillable = ['placement_status'];

    public function submission()
    {
        return $this->belongsTo(Submission::class, 'submission_id', 'submission_id');
    }
}
