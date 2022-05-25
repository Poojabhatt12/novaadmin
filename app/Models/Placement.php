<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
    protected $table = 'placement';
    protected $primaryKey = 'placement_id';
    public function submission()
    {
        return $this->belongsTo(Submission::class, 'submission_id', 'submission_id');
    }

}
