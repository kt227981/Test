<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public $table='notifications';

    protected $fillable = [
        'name',
        'email',
        'user_id',
        'read_at',

    ];

}
