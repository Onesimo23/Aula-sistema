<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'course_id',
        'status',
        'user_id'
    ];


    public function paymentStatus()
    {
        return $this->status;
    }
}
