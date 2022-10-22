<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfitters extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email','phone', 'productf', 'adress', 'user_id'];

    //chave estrangeira
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
