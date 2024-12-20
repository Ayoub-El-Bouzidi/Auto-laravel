<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name','bio','photo','user_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
