<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'plan_id', 'amount_received', 'amount_pending', 'payment_mode'];


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}