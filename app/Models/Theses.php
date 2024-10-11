<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theses extends Model
{
    /** @use HasFactory<\Database\Factories\ThesesFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'student_id',
        'program',
        'supervisor',
        'abstract',
        'submission_date',
        'defense_date'
    ];

    public function student(){
        return $this->belongsTo(Students::class);
    }
}
