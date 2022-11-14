<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';

    public  $fillable = [
        'name',
        'email',
        'mobile_no',
        'state',
        'city',
        'pincode',
        'course_name',
        'enrollment_number',
        'address',
        'birth_date',
        'status',
    ];

}
