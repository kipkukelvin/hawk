<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;   

class Application extends Model
{
     protected $fillable = [
        'name',
        'email',
        'id_scan',
        'phone',  
        'course_id',
        'academic_certificates',
    ];
       public function course()
    {
         return $this->belongsTo(Course::class);
    }
}
