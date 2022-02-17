<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referral extends Model
{
    use HasFactory;
    public function get_city()
    {
        return $this->belongsTo('App\Models\cites','reciver_id','id');
    }
    public function refer_user()
    {
        return $this->belongsTo('App\Models\User','reciver_id','id');
    }
    public function clint_user()
    {
        return $this->belongsTo('App\Models\referral_user','referral_user_id','id');
    }
}
