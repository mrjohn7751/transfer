<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttj extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // 'birth_date',
        'phone_num',
        'parent_num',
        // 'region',
        // 'address',
        // 'facultate',
        // 'facultate_id',
        // 'cafedra',
        'deriction',
        'shape',
        'group',
        'course',
        'deriction2',
        'shape2',
        'details',
        'check',
        'doc'
    ];
}
