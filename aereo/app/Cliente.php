<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function lista(){

    	return (object)[
         (object)["nome"=>"Zacarias"],
         (object)["nome"=>"Paulino"],
         (object)["nome"=>"Isabel"],
         (object)["nome"=>"Joana"],
         (object)["nome"=>"Khalif"],
         
    	];
    }
}
