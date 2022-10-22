<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'value', 'quantify', 'provider', 'description', 'user_id'];

    //chave estrangeira
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}