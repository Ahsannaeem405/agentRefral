<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User','sender_id','id');
    }
    public function user2()
    {
        return $this->belongsTo('App\Models\User','reciver_id','id');
    }
}
