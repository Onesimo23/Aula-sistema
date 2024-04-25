<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'status',
    ];


    public function paymentStatus()
    {
        return $this->status;
    }
}
