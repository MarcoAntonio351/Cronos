<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'value', 'user_id'];

    //chave estrangeira
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //chave primaria em outras tabelas
    public function users(){
        return $this->hasMany(Outfitters::class, 'users');
    }
}