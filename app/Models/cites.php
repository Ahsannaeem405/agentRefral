<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class cites extends Model
{
    
protected $fillable = [
    'name',

];
public function user()
{
    return $this->hasOne('App\Models\User','city','id');
}
    use HasFactory;
}
