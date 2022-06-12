<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserCV extends Model
{
    use HasFactory;

    public function skills(){
        return $this->hasMany(Skill::class);
    }
    public function educations(){
        return $this->hasMany(Education::class);
    }
    public function experiences(){
        return $this->hasMany(Experience::class);
    }
    public function users(){
        return $this->belongsToMany(User::class,'role_users');
    }
}
