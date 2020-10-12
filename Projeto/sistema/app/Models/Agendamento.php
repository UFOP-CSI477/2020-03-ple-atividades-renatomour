<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    
    protected $fillable = ['pessoa_id','sala_id', 'data'];

    public function Pessoa(){
        
        return $this->hasOne('App\Models\Pessoa', 'id', 'pessoa_id');
}

public function Sala(){
        
    return $this->hasOne('App\Models\Sala', 'id', 'sala_id');
}
}
