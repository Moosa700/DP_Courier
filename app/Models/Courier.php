<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = ['sender_name','sender_email','sender_address','sender_phone','reciver_name','reciver_email','reciver_address','reciver_phone','courier_type','courier_weight','status','agent_id','user_id'];
}
