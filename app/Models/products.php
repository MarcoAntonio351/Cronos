<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'value', 'quantify', 'provider', 'description'];

    //chave estrangeira
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}