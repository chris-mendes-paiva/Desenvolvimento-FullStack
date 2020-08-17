<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    //protected $primaryKey = 'id'; 
    //Se a chave primaria for id, não precisa declarar ela o laravel sempre buscar por id
    //isso que você fez não esta errado, mas não serve de nada. Entendeu?
    // Pode crê
    //Não. Só comentei isso para aprendizado mesmo 
	protected $guarded = [        
		'id'        
    ];
    public $timestamps = false;

    protected $fillable = [
        'name', 'price', 'description'
    ];
}
