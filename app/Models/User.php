<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
public $timestamps = false; 
  
protected $primaryKey = 'numberuser';  
  
protected $table = 'tbluser'; 
  
protected $fillable = [ 
    'numberuser', 'username', 'password' 
]; 
}
