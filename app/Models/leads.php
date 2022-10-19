<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone','email', 'organization', 'gender',];

    //chave estrangeira
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
