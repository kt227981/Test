<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $table = 'api';

    public $fillable = [
        'name',
        'email',
        'password',
        'image',
        'state',
        'city',
        'pincode',
        'user_id'
    ];


}
