<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_key',
        'department_name',
        'departmemt_head',
        'status'
    ];

    public function department()
    {
        $this->belongsTo(User::class);
    }
}
