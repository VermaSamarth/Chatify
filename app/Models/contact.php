<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    
    public function is_contact(){
        return $this->hasOne(user::class,'id','user_id_2');
    }
}
