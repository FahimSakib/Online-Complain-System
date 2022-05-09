<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teachers(){
        return $this->hasMany(User::class);
    }

    public function Complains(){
        return $this->hasMany(Complain::class);
    }

}
